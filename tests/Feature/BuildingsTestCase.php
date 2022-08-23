<?php

namespace Jetimob\Studio360\Tests\Feature;

use Jetimob\Studio360\Api\Buildings\BuildingsApi;
use Jetimob\Studio360\Exceptions\Studio360RequestException;
use Jetimob\Studio360\Facades\Studio360;
use Jetimob\Studio360\Tests\TestCase;

class BuildingsTestCase extends TestCase
{
    protected BuildingsApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Studio360::buildings();
    }

    public function testListBuildings(): int
    {
        try {
            $response = $this->api->list();
            $this->assertSame(200, $response->getStatusCode());

            $firstBuildingId = $response->getData()[0]->getId();

            return $firstBuildingId;
        } catch (Studio360RequestException $exception) {
            dump($exception);
        }
    }

    /**
     * @depends testListBuildings
     */
    public function testFindBuilding(int $firstBuildingId): void
    {
        
        try {
            $response = $this->api->find($firstBuildingId);
            
            $this->assertSame(200, $response->getStatusCode());
            
            dump($response);
        } catch (Studio360RequestException $exception) {
            dump($exception->getMessage());
        }
    }

    public function testExceptionOnUnknownId(): void
    {
        try {
            $this->api->find(-207);
        } catch (Studio360RequestException $exception) {
            $this->assertSame(400, $exception->getResponse()->getStatusCode());
            dump($exception);
        }
    }
}

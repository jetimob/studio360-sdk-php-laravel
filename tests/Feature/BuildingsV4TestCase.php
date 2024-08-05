<?php

namespace Jetimob\Studio360\Tests\Feature;

use Jetimob\Studio360\Api\Buildings\BuildingsApi;
use Jetimob\Studio360\Api\Buildings\EnterprisesExpandedResponse;
use Jetimob\Studio360\Entity\Unit;
use Jetimob\Studio360\Enums\VersionApi;
use Jetimob\Studio360\Facades\Studio360;
use Jetimob\Studio360\Tests\TestCase;

/**
 * A Versão 4 desde SDK captura todos os dados dos
 * empreendimentos em uma única execução.
 * 
 * Os dados capturados na rota "/enterprises-expanded" retorna os dados:
 *  - Empreendimento
 *      - Unidades do Empreendimento
 */
class BuildingsV4TestCase extends TestCase
{
    protected BuildingsApi $api;

    public function setUp(): void
    {
        parent::setUp();
        // Sem informar versão, por padrão assume v4
        $this->api = Studio360::buildings();
    }

    /**
     * Teste para garantir o funcionamento da V4, caso configurado.
     */
    public function testDefinedVersionV4()
    {
        $api = Studio360::buildings(VersionApi::V4);
        $response = $api->list();
        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(EnterprisesExpandedResponse::class, $response);
    }

    /**
     * Teste para garantir a captura de dados da Rota "/enterprises-expanded"
     */
    public function testListExpandedBuildings()
    {
        $response = $this->api->list();

        $this->assertSame(200, $response->getStatusCode());

        $this->assertInstanceOf(EnterprisesExpandedResponse::class, $response);

        $data = current($response->getData());

        $this->assertNotEmpty($data->getId());
        $this->assertNotEmpty($data->getTitle());
        $this->assertNotEmpty($data->getDescription());
        $this->assertNotNull($data->getDeleted());
        $this->assertNotEmpty($data->getStatus());
    }

    /**
     * Teste para garantir a captura de dados da Unidade usando a rota "/enterprises-expanded"
     */
    public function testListExpandedBuildingsUnit()
    {
        $response = $this->api->list();

        $data = current($response->getData());

        $unit = current($data->getUnit());

        $this->assertInstanceOf(Unit::class, $unit);

        $this->assertNotEmpty($unit->getId());
        $this->assertNotEmpty($unit->getTitle());
        $this->assertNotEmpty($unit->getPrice());
        $this->assertNotEmpty($unit->getBathroom());
        $this->assertNotNull($unit->getDeleted());
        $this->assertNotNull($unit->getParkingSpaces());
        $this->assertNotNull($unit->getDorms());
        $this->assertNotNull($unit->getSuites());
        $this->assertNotNull($unit->getPrivateArea());
        $this->assertNotNull($unit->getTotalArea());
        $this->assertNotNull($unit->getType());
    }

    /**
     * Teste para garantir o valor padrão de limite de registros por página
     */
    public function testListDefaultLimit10()
    {
        $response = $this->api->list();
        $this->assertEquals(10, $response->getPerPage());
    }

    /**
     * Teste para garantir a configuração de limite de registros por página
     */
    public function testListConfiguredLimit()
    {
        $response = $this->api->list(20);
        $this->assertEquals(20, $response->getPerPage());
    }

    /**
     * Teste para garantir o valor padrão da página atual
     */
    public function testListDefaultPage()
    {
        $response = $this->api->list();
        $this->assertEquals(1, $response->getPage());
    }

    /**
     * Teste para garantir a configuração da página atual
     */
    public function testListConfiguredPage()
    {
        $response = $this->api->list(10, 3);
        $this->assertEquals(3, $response->getPage());
    }
}

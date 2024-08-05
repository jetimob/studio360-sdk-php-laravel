<?php

namespace Jetimob\Studio360\Tests\Feature;

use Jetimob\Studio360\Api\Buildings\BuildingsApi;
use Jetimob\Studio360\Api\Buildings\EnterpriseResponse;
use Jetimob\Studio360\Api\Buildings\EnterprisesResponse;
use Jetimob\Studio360\Entity\EnterpriseData;
use Jetimob\Studio360\Entity\Unit;
use Jetimob\Studio360\Enums\VersionApi;
use Jetimob\Studio360\Facades\Studio360;
use Jetimob\Studio360\Tests\TestCase;

/**
 * A Versão 5 desde SDK captura os dados do empreendimento e, após,
 * executa a rota para capturar os detalhes e unidades de cada empreendimento.
 * 
 * Os dados capturados na rota "/enterprises" retorna os dados básico:
 *  - Empreendimento
 * Com os dados do empreendimento são capturados na rota "/enterprise/$enterpriseID/$condominiumId"
 * os dados detalhados e as unidades do empreendimento.
 *  - Empreendimento
 *      - Unidades do Empreendimento
 */
class BuildingsV5TestCase extends TestCase
{
    protected BuildingsApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Studio360::buildings(VersionApi::V5);
    }

    /**
     * Teste para garantir a captura de dados da Rota "/enterprises"
     */
    public function testListBuildings()
    {
        $response = $this->api->list();

        $this->assertSame(200, $response->getStatusCode());

        $this->assertInstanceOf(EnterprisesResponse::class, $response);

        $data = current($response->getData());

        $this->assertNotEmpty($data->getEnterpriseId());
        $this->assertNotEmpty($data->getCondominiumId());
    }

    /**
     * Teste para garantir a busca dos detalhes e unidades de um empreendimento
     */
    public function testFindUnitsByEnterpriseAndCondominium()
    {
        $response = $this->api->list();

        $this->assertSame(200, $response->getStatusCode());

        $this->assertInstanceOf(EnterprisesResponse::class, $response);

        $data = current($response->getData());

        $unitResponse = $this->api->find(
            $data->getEnterpriseId(),
            $data->getCondominiumId()
        );

        $this->assertInstanceOf(EnterpriseResponse::class, $unitResponse);

        $data = $unitResponse->getData();

        $this->assertInstanceOf(EnterpriseData::class, $data);

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
     * Teste para garantir o tratamento de erro caso seja informado
     * um Enterprise e/ou Condominio que não existe
     */
    public function testFindUnitNotFound()
    {
        $unitResponse = $this->api->find(
            '123',
            '456'
        );
        
        $this->assertNull($unitResponse->getData());
    }
}

<?php

namespace Jetimob\Studio360\Api\Buildings;

use GuzzleHttp\RequestOptions;
use Jetimob\Studio360\Api\AbstractApi;

class BuildingsApi extends AbstractApi
{
    public function list(int $limit, int $page = 1): BuildingsResponse
    {
        return $this->mappedGet('enterprises-expanded', BuildingsResponse::class, [
            RequestOptions::QUERY => [
                'limit' => $limit,
                'page' => $page
            ],
        ]);
    }

    public function find(int $enterpriseID, int $condominiumId): BuildingResponse
    {
        return $this->mappedGet("enterprise/$enterpriseID/$condominiumId", BuildingResponse::class);
    }
}

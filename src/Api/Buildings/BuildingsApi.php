<?php

namespace Jetimob\Studio360\Api\Buildings;

use GuzzleHttp\RequestOptions;
use Jetimob\Studio360\Api\AbstractApi;
use Jetimob\Studio360\Studio360;
use Jetimob\Studio360\Enums\VersionApi;

class BuildingsApi extends AbstractApi
{
    public function __construct(
        Studio360 $studio360,
        private readonly VersionApi $versionApi,
    )
    {
        parent::__construct($studio360);
    }

    public function getVersionApi(): VersionApi
    {
        return $this->versionApi;
    }

    public function list(int $limit, int $page = 1): EnterprisesExpandedResponse | EnterprisesResponse
    {
        if ($this->versionApi === VersionApi::V5) {
            return $this->mappedGet('enterprises', EnterprisesResponse::class, [
                RequestOptions::QUERY => [
                    'limit' => $limit,
                    'page' => $page
                ],
            ]);
        }
        return $this->mappedGet('enterprises-expanded', EnterprisesExpandedResponse::class, [
            RequestOptions::QUERY => [
                'limit' => $limit,
                'page' => $page
            ],
        ]);

    }

    public function find(int $enterpriseID, int $condominiumId): EnterpriseResponse
    {
        return $this->mappedGet("enterprise/$enterpriseID/$condominiumId", EnterpriseResponse::class);
    }
}

<?php

namespace Jetimob\Studio360\Api\Buildings;

use Jetimob\Studio360\Api\Studio360Response;
use Jetimob\Studio360\Entity\EnterpriseData;

class EnterpriseResponse extends Studio360Response
{
    protected ?EnterpriseData $data;

    /**
     * @return EnterpriseData|null
     */
    public function getData(): ?EnterpriseData
    {
        return $this->data ?? null;
    }
}

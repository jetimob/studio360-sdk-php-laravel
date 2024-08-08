<?php

namespace Jetimob\Studio360\Api\Buildings;

use Jetimob\Studio360\Entity\EnterprisesData;

class EnterprisesResponse extends EnterprisesExpandedResponse
{
    protected int $total;
    protected int $perPage;
    protected int $page;
    protected int $lastPage;
    protected array $data;

    public function dataItemType(): string
    {
        return EnterprisesData::class;
    }
}

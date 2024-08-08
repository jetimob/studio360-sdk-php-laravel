<?php

namespace Jetimob\Studio360\Api\Buildings;

use Jetimob\Studio360\Api\Studio360Response;
use Jetimob\Studio360\Entity\EnterprisesExpandedData;

class EnterprisesExpandedResponse extends Studio360Response
{
    protected int $total;
    protected int $perPage;
    protected int $page;
    protected int $lastPage;
    protected array $data;

    public function dataItemType(): string
    {
        return EnterprisesExpandedData::class;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLastPage(): int
    {
        return $this->lastPage;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data ?? [];
    }
}

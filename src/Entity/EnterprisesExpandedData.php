<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class EnterprisesExpandedData
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    protected ?string $description = null;
    protected ?string $status;
    protected ?string $deleted;
    protected ?string $addressDisplayType;
    protected ?array $unit;
    protected Building $building;
    protected ConstructionCompany $constructionCompany;
    protected ?string $lastUpdatedAt;

    public function unitItemType(): string
    {
        return Unit::class;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    /**
     * @return string|null
     */
    public function getAddressDisplayType(): ?string
    {
        return $this->addressDisplayType;
    }

    /**
     * @return array|null
     */
    public function getUnit(): ?array
    {
        return $this->unit;
    }

    /**
     * @return Building
     */
    public function getBuilding(): Building
    {
        return $this->building;
    }

    /**
     * @return ConstructionCompany
     */
    public function getConstructionCompany(): ConstructionCompany
    {
        return $this->constructionCompany;
    }

    /**
     * @return string|null
     */
    public function getLastUpdatedAt(): ?string
    {
        return $this->lastUpdatedAt;
    }

    /**
     * @param int $id
     *
     * @return EnterprisesExpandedData
     */
    public function setId(int $id): EnterprisesExpandedData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $title
     *
     * @return EnterprisesExpandedData
     */
    public function setTitle(?string $title): EnterprisesExpandedData
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $description
     *
     * @return EnterprisesExpandedData
     */
    public function setDescription(?string $description): EnterprisesExpandedData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $status
     *
     * @return EnterprisesExpandedData
     */
    public function setStatus(?string $status): EnterprisesExpandedData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $deleted
     *
     * @return EnterprisesExpandedData
     */
    public function setDeleted(?string $deleted): EnterprisesExpandedData
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @param string|null $addressDisplayType
     *
     * @return EnterprisesExpandedData
     */
    public function setAddressDisplayType(?string $addressDisplayType): EnterprisesExpandedData
    {
        $this->addressDisplayType = $addressDisplayType;
        return $this;
    }

    /**
     * @param array|null $unit
     *
     * @return EnterprisesExpandedData
     */
    public function setUnit(?array $unit): EnterprisesExpandedData
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @param Building $building
     *
     * @return EnterprisesExpandedData
     */
    public function setBuilding(Building $building): EnterprisesExpandedData
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @param ConstructionCompany $constructionCompany
     *
     * @return EnterprisesExpandedData
     */
    public function setConstructionCompany(ConstructionCompany $constructionCompany): EnterprisesExpandedData
    {
        $this->constructionCompany = $constructionCompany;
        return $this;
    }

    /**
     * @param string|null $lastUpdatedAt
     *
     * @return EnterprisesExpandedData
     */
    public function setLastUpdatedAt(?string $lastUpdatedAt): EnterprisesExpandedData
    {
        $this->lastUpdatedAt = $lastUpdatedAt;
        return $this;
    }

    public static function new(
        int $id,
        ?string $title,
        ?string $description,
        ?string $status,
        ?string $deleted,
        ?string $addressDisplayType,
        ?array $unit,
        Building $building,
        ConstructionCompany $constructionCompany,
        ?string $lastUpdatedAt
    ): self
    {
        return (new static())
            ->setId($id)
            ->setTitle($title)
            ->setDescription($description)
            ->setStatus($status)
            ->setDeleted($deleted)
            ->setAddressDisplayType($addressDisplayType)
            ->setUnit($unit)
            ->setBuilding($building)
            ->setConstructionCompany($constructionCompany)
            ->setLastUpdatedAt($lastUpdatedAt);
    }
}

<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class EnterpriseData
{
    use Serializable;

    protected int $id;
    protected ?string $slug;
    protected ?string $title;
    protected ?string $description;
    protected ?string $deleted;
    protected ?string $lastUpdatedAt;
    protected ?string $addressDisplayType;
    protected ?string $status;
    protected ?array $unit;
    protected ConstructionCompany $constructionCompany;
    protected Building $building;

    public function unitItemType(): string
    {
        return Unit::class;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    public function getLastUpdatedAt(): ?string
    {
        return $this->lastUpdatedAt;
    }
    
    public function getAddressDisplayType(): ?string
    {
        return $this->addressDisplayType;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getConstructionCompany(): ConstructionCompany
    {
        return $this->constructionCompany;
    }

    public function getBuilding(): Building
    {
        return $this->building;
    }

    public function getUnit(): ?array
    {
        return $this->unit;
    }

    public function setId(int $id): EnterpriseData
    {
        $this->id = $id;
        return $this;
    }

    public function setSlug(?string $slug): EnterpriseData
    {
        $this->slug = $slug;
        return $this;
    }

    public function setTitle(?string $title): EnterpriseData
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription(?string $description): EnterpriseData
    {
        $this->description = $description;
        return $this;
    }

    public function setDeleted(?string $deleted): EnterpriseData
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function setLastUpdatedAt(?string $lastUpdatedAt): EnterpriseData
    {
        $this->lastUpdatedAt = $lastUpdatedAt;
        return $this;
    }
    
    public function setAddressDisplayType(?string $addressDisplayType): EnterpriseData
    {
        $this->addressDisplayType = $addressDisplayType;
        return $this;
    }

    public function setStatus(?string $status): EnterpriseData
    {
        $this->status = $status;
        return $this;
    }

    public function setConstructionCompany(ConstructionCompany $constructionCompany): EnterpriseData
    {
        $this->constructionCompany = $constructionCompany;
        return $this;
    }

    public function setBuilding(Building $building): EnterpriseData
    {
        $this->building = $building;
        return $this;
    }

    public function setUnit(?array $unit): EnterpriseData
    {
        $this->unit = $unit;
        return $this;
    }

    public static function new(
        int $id,
        ?string $slug,
        ?string $title,
        ?string $description,
        ?string $deleted,
        ?string $lastUpdatedAt,
        ?string $addressDisplayType,
        ?string $status,
        ?array $unit,
        ConstructionCompany $constructionCompany,
        Building $building
    ): self
    {
        return (new static())
            ->setId($id)
            ->setSlug($slug)
            ->setTitle($title)
            ->setDescription($description)
            ->setDeleted($deleted)
            ->setLastUpdatedAt($lastUpdatedAt)
            ->setAddressDisplayType($addressDisplayType)
            ->setUnit($unit)
            ->setStatus($status)
            ->setConstructionCompany($constructionCompany)
            ->setBuilding($building);
    }
}

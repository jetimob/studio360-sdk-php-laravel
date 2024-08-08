<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class EnterprisesData
{
    use Serializable;

    protected int $enterpriseId;
    protected int $buildingId;
    protected int $condominiumId;
    protected ?string $slug;
    protected ?string $title;
    protected ?string $description = null;
    protected ?string $deleted;
    protected ?string $lastUpdatedAt;
    protected ?string $status;
    protected ConstructionCompany $constructionCompany;

    /**
     * @return int
     */
    public function getEnterpriseId(): int
    {
        return $this->enterpriseId;
    }

    /**
     * @return int
     */
    public function getBuildingId(): int
    {
        return $this->buildingId;
    }

    /**
     * @return int
     */
    public function getCondominiumId(): int
    {
        return $this->condominiumId;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
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
    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    /**
     * @return string|null
     */
    public function getLastUpdatedAt(): ?string
    {
        return $this->lastUpdatedAt;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return ConstructionCompany
     */
    public function getConstructionCompany(): ConstructionCompany
    {
        return $this->constructionCompany;
    }

    /**
     * @param int $enterpriseId
     *
     * @return EnterprisesData
     */
    public function setEnterpriseId(int $enterpriseId): EnterprisesData
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }

    /**
     * @param int $buildingId
     *
     * @return EnterprisesData
     */
    public function setBuildingId(int $buildingId): EnterprisesData
    {
        $this->buildingId = $buildingId;
        return $this;
    }

    /**
     * @param int $condominiumId
     *
     * @return EnterprisesData
     */
    public function setCondominiumId(int $condominiumId): EnterprisesData
    {
        $this->condominiumId = $condominiumId;
        return $this;
    }

    /**
     * @param string|null $slug
     *
     * @return EnterprisesData
     */
    public function setSlug(?string $slug): EnterprisesData
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @param string|null $title
     *
     * @return EnterprisesData
     */
    public function setTitle(?string $title): EnterprisesData
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $description
     *
     * @return EnterprisesData
     */
    public function setDescription(?string $description): EnterprisesData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $deleted
     *
     * @return EnterprisesData
     */
    public function setDeleted(?string $deleted): EnterprisesData
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @param string|null $lastUpdatedAt
     *
     * @return EnterprisesData
     */
    public function setLastUpdatedAt(?string $lastUpdatedAt): EnterprisesData
    {
        $this->lastUpdatedAt = $lastUpdatedAt;
        return $this;
    }

    /**
     * @param string|null $status
     *
     * @return EnterprisesData
     */
    public function setStatus(?string $status): EnterprisesData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param ConstructionCompany $constructionCompany
     *
     * @return EnterprisesData
     */
    public function setConstructionCompany(ConstructionCompany $constructionCompany): EnterprisesData
    {
        $this->constructionCompany = $constructionCompany;
        return $this;
    }

    public static function new(
        int $enterpriseId,
        int $buildingId,
        int $condominiumId,
        ?string $slug,
        ?string $title,
        ?string $description = null,
        ?string $deleted,
        ?string $lastUpdatedAt,
        ?string $status,
        ConstructionCompany $constructionCompany
    ): self
    {
        return (new static())
            ->setEnterpriseId($enterpriseId)
            ->setBuildingId($buildingId)
            ->setCondominiumId($condominiumId)
            ->setSlug($slug)
            ->setTitle($title)
            ->setDescription($description)
            ->setDeleted($deleted)
            ->setLastUpdatedAt($lastUpdatedAt)
            ->setStatus($status)
            ->setConstructionCompany($constructionCompany);
    }
}

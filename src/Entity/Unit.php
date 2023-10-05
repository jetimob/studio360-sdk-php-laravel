<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected ?string $title = null;
    protected ?string $price;
    protected ?int $bathrooms;
    protected ?string $type;
    protected ?int $dorms;
    protected ?int $suites;
    protected ?int $parkingSpaces = null;
    protected ?string $utilArea = null;
    protected ?string $privateArea;
    protected ?string $totalArea;
    protected ?string $groundArea = null;
    protected ?string $rentalValue = null;
    protected ?string $deleted;

    /**
     * @return string|null
     */
    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    /**
     * @param string|null $deleted
     */
    public function setDeleted(?string $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string|null
     */
    public function getRentalValue(): ?string
    {
        return $this->rentalValue;
    }

    /**
     * @return string|null
     */
    public function getGroundArea(): ?string
    {
        return $this->groundArea;
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
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @return int|null
     */
    public function getParkingSpaces(): ?int
    {
        return $this->parkingSpaces;
    }

    /**
     * @return int|null
     */
    public function getDorms(): ?int
    {
        return $this->dorms;
    }

    /**
     * @return int|null
     */
    public function getSuites(): ?int
    {
        return $this->suites;
    }

    /**
     * @return string|null
     */
    public function getPrivateArea(): ?string
    {
        return $this->privateArea;
    }

    /**
     * @return string|null
     */
    public function getTotalArea(): ?string
    {
        return $this->totalArea;
    }

    /**
     * @param int $id
     *
     * @return Unit
     */
    public function setId(int $id): Unit
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $title
     *
     * @return Unit
     */
    public function setTitle(?string $title): Unit
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $price
     *
     * @return Unit
     */
    public function setPrice(?string $price): Unit
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param int|null $parkingSpaces
     *
     * @return Unit
     */
    public function setParkingSpaces(?int $parkingSpaces): Unit
    {
        $this->parkingSpaces = $parkingSpaces;
        return $this;
    }

    /**
     * @param int|null $dorms
     *
     * @return Unit
     */
    public function setDorms(?int $dorms): Unit
    {
        $this->dorms = $dorms;
        return $this;
    }

    /**
     * @param int|null $suites
     *
     * @return Unit
     */
    public function setSuites(?int $suites): Unit
    {
        $this->suites = $suites;
        return $this;
    }

    /**
     * @param string|null $privateArea
     *
     * @return Unit
     */
    public function setPrivateArea(?string $privateArea): Unit
    {
        $this->privateArea = $privateArea;
        return $this;
    }

    /**
     * @param string|null $totalArea
     *
     * @return Unit
     */
    public function setTotalArea(?string $totalArea): Unit
    {
        $this->totalArea = $totalArea;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathrooms;
    }

    /**
     * @param int|null $bathrooms
     *
     * @return Unit
     */
    public function setBathroom(?int $bathrooms): Unit
    {
        $this->bathrooms = $bathrooms;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return Unit
     */
    public function setType(?string $type): Unit
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUtilArea(): ?string
    {
        return $this->utilArea;
    }

    /**
     * @param string|null $utilArea
     *
     * @return Unit
     */
    public function setUtilArea(?string $utilArea): Unit
    {
        $this->utilArea = $utilArea;
        return $this;
    }
}

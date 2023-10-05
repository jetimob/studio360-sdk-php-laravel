<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Building
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    protected ?string $incorporationRegistration;
    protected ?string $type;
    protected ?bool $rent;
    protected ?array $gallery;
    protected ?array $video;
    protected ?array $tour360;
    protected ?string $rentalValue;
    protected Address $address;
    protected ?string $textAddress;
    protected ?array $cover;
    protected ?array $features;

    public function galleryItemType(): string
    {
        return Gallery::class;
    }

    public function videoItemType(): string
    {
        return Video::class;
    }

    public function tour360ItemType(): string
    {
        return Video::class;
    }

    public function featuresItemType(): string
    {
        return Features::class;
    }

    public function coverItemType(): string
    {
        return Cover::class;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Building
     */
    public function setId(int $id): Building
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return Building
     */
    public function setTitle(?string $title): Building
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getGallery(): ?array
    {
        return $this->gallery;
    }

    /**
     * @param array|null $gallery
     *
     * @return Building
     */
    public function setGallery(?array $gallery): Building
    {
        $this->gallery = $gallery;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getVideo(): ?array
    {
        return $this->video;
    }

    /**
     * @param array|null $video
     *
     * @return Building
     */
    public function setVideo(?array $video): Building
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTour360(): ?array
    {
        return $this->tour360;
    }

    /**
     * @param array|null $tour360
     *
     * @return Building
     */
    public function setTour360(?array $tour360): Building
    {
        $this->tour360 = $tour360;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return Building
     */
    public function setAddress(Address $address): Building
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextAddress(): ?string
    {
        return $this->textAddress;
    }

    /**
     * @param string|null $textAddress
     *
     * @return Building
     */
    public function setTextAddress(?string $textAddress): Building
    {
        $this->textAddress = $textAddress;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCover(): ?array
    {
        return $this->cover ?? null;
    }

    /**
     * @param array|null $cover
     *
     * @return Building
     */
    public function setCover(?array $cover): Building
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return ?array
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * @param array|null $features
     * @return Building
     */
    public function setFeatures(?array $features): Building
    {
        $this->features = $features;
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
     * @return Building
     */
    public function setType(?string $type): Building
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isRent(): ?bool
    {
        return $this->rent;
    }

    /**
     * @param bool|null $rent
     *
     * @return Building
     */
    public function setRent(?bool $rent): Building
    {
        $this->rent = $rent;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIncorporationRegistration(): ?string
    {
        return $this->incorporationRegistration;
    }

    /**
     * @return string|null
     */
    public function getRentalValue(): ?string
    {
        return $this->rentalValue;
    }
}

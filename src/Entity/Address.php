<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Address
{
    use Serializable;

    protected ?string $streetName;
    protected ?string $streetNumber;
    protected ?string $neighborhood;
    protected ?string $complement = null;
    protected ?string $zipCode;
    protected ?string $city;
    protected ?string $state;
    protected ?string $country;
    protected ?string $latitude;
    protected ?string $longitude;

    /**
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string|null $streetName
     *
     * @return Address
     */
    public function setStreetName(?string $streetName): Address
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string|null $streetNumber
     *
     * @return Address
     */
    public function setStreetNumber(?string $streetNumber): Address
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     *
     * @return Address
     */
    public function setNeighborhood(?string $neighborhood): Address
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     *
     * @return Address
     */
    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     *
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     *
     * @return Address
     */
    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return Address
     */
    public function setState(?string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     *
     * @return Address
     */
    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string|null $latitude
     *
     * @return Address
     */
    public function setLatitude(?string $latitude): Address
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param string|null $longitude
     *
     * @return Address
     */
    public function setLongitude(?string $longitude): Address
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function new(
        ?string $streetName,
        ?string $streetNumber,
        ?string $neighborhood,
        ?string $complement,
        ?string $zipCode,
        ?string $city,
        ?string $state,
        ?string $country,
        ?string $latitude,
        ?string $longitude
    ): self {
        return (new static())
            ->setStreetName($streetName)
            ->setStreetNumber($streetNumber)
            ->setNeighborhood($neighborhood)
            ->setComplement($complement)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
}

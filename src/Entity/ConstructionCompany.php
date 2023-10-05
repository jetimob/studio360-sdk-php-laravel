<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompany
{
    use Serializable;

    protected ?string $title = null;
    protected ?string $whatsapp = null;
    protected ?string $instagram = null;
    protected ?array $businessContacts = null;
    protected ?string $description = null;
    protected Logo $logo;

    public function businessContactsItemType(): string
    {
        return BusinessContact::class;
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
     * @return ConstructionCompany
     */
    public function setTitle(?string $title): ConstructionCompany
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWhatsapp(): ?string
    {
        return $this->whatsapp;
    }

    /**
     * @param string|null $whatsapp
     *
     * @return ConstructionCompany
     */
    public function setWhatsapp(?string $whatsapp): ConstructionCompany
    {
        $this->whatsapp = $whatsapp;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    /**
     * @param string|null $instagram
     *
     * @return ConstructionCompany
     */
    public function setInstagram(?string $instagram): ConstructionCompany
    {
        $this->instagram = $instagram;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getBusinessContacts(): ?array
    {
        return $this->businessContacts;
    }

    /**
     * @param array|null $businessContacts
     *
     * @return ConstructionCompany
     */
    public function setBusinessContacts(?array $businessContacts): ConstructionCompany
    {
        $this->businessContacts = $businessContacts;
        return $this;
    }

    /**
     * @return Logo
     */
    public function getLogo(): Logo
    {
        return $this->logo;
    }

    /**
     * @param Logo $logo
     *
     * @return ConstructionCompany
     */
    public function setLogo(Logo $logo): ConstructionCompany
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return ConstructionCompany
     */
    public function setDescription(?string $description): ConstructionCompany
    {
        $this->description = $description;
        return $this;
    }



    public static function new(
        ?string $title,
        ?string $whatsapp,
        ?string $instagram,
        ?string $description,
        ?array $businessContacts,
        Logo $logo
    )
    : self {
        return (new static())
            ->setTitle($title)
            ->setWhatsapp($whatsapp)
            ->setInstagram($instagram)
            ->setDescription($description)
            ->setBusinessContacts($businessContacts)
            ->setLogo($logo);
    }
}

<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class BusinessContact
{
    use Serializable;

    protected ?string $responsible;
    protected ?string $phoneNumber;

    /**
     * @return string|null
     */
    public function getResponsible(): ?string
    {
        return $this->responsible;
    }

    /**
     * @param string|null $responsible
     *
     * @return BusinessContact
     */
    public function setResponsible(?string $responsible): BusinessContact
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     *
     * @return BusinessContact
     */
    public function setPhoneNumber(?string $phoneNumber): BusinessContact
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function new(?string $responsible, ?string $phoneNumber): self
    {
        return (new static())
            ->setResponsible($responsible)
            ->setPhoneNumber($phoneNumber);
    }
}

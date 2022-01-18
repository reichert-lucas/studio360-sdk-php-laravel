<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class BusinessContact
{
    use Serializable;

    protected ?string $responsible;
    protected ?string $phone_number;

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
        return $this->phone_number;
    }

    /**
     * @param string|null $phone_number
     *
     * @return BusinessContact
     */
    public function setPhoneNumber(?string $phone_number): BusinessContact
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    public function new(?string $responsible, ?string $phone_number): self
    {
        return (new static())
            ->setResponsible($responsible)
            ->setPhoneNumber($phone_number);
    }
}

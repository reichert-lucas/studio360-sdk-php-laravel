<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompany
{
    use Serializable;

    protected string $title;
    protected string $whatsapp;
    protected ?string $instagram = null;
    protected array $business_contacts;
    protected Logo $logo;

    public function business_contactsItemType(): string
    {
        return BusinessContact::class;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return ConstructionCompany
     */
    public function setTitle(string $title): ConstructionCompany
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getWhatsapp(): string
    {
        return $this->whatsapp;
    }

    /**
     * @param string $whatsapp
     *
     * @return ConstructionCompany
     */
    public function setWhatsapp(string $whatsapp): ConstructionCompany
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
     * @return array
     */
    public function getBusinessContacts(): array
    {
        return $this->business_contacts;
    }

    /**
     * @param array $business_contacts
     *
     * @return ConstructionCompany
     */
    public function setBusinessContacts(array $business_contacts): ConstructionCompany
    {
        $this->business_contacts = $business_contacts;
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

    public static function new(
        string $title,
        string $whatsapp,
        ?string $instagram,
        array $business_contacts,
        Logo $logo
    )
    : self {
        return (new static())
            ->setTitle($title)
            ->setWhatsapp($whatsapp)
            ->setInstagram($instagram)
            ->setBusinessContacts($business_contacts)
            ->setLogo($logo);
    }
}

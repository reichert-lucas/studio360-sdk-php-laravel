<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class PropertyData
{
    use Serializable;

    protected int $id;
    protected string $title;
    protected ?string $description = null;
    protected string $status;
    protected string $deleted;
    protected string $address_display_type;
    protected array $unit;
    protected Building $building;
    protected ConstructionCompany $construction_company;
    protected string $last_updated_at;

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
     * @return string
     */
    public function getTitle(): string
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDeleted(): string
    {
        return $this->deleted;
    }

    /**
     * @return string
     */
    public function getAddressDisplayType(): string
    {
        return $this->address_display_type;
    }

    /**
     * @return array
     */
    public function getUnit(): array
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
        return $this->construction_company;
    }

    /**
     * @return string
     */
    public function getLastUpdatedAt(): string
    {
        return $this->last_updated_at;
    }

    /**
     * @param int $id
     *
     * @return PropertyData
     */
    public function setId(int $id): PropertyData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $title
     *
     * @return PropertyData
     */
    public function setTitle(string $title): PropertyData
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $description
     *
     * @return PropertyData
     */
    public function setDescription(string $description): PropertyData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $status
     *
     * @return PropertyData
     */
    public function setStatus(string $status): PropertyData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $deleted
     *
     * @return PropertyData
     */
    public function setDeleted(string $deleted): PropertyData
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @param string $address_display_type
     *
     * @return PropertyData
     */
    public function setAddressDisplayType(string $address_display_type): PropertyData
    {
        $this->address_display_type = $address_display_type;
        return $this;
    }

    /**
     * @param array $unit
     *
     * @return PropertyData
     */
    public function setUnit(array $unit): PropertyData
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @param Building $building
     *
     * @return PropertyData
     */
    public function setBuilding(Building $building): PropertyData
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @param ConstructionCompany $construction_company
     *
     * @return PropertyData
     */
    public function setConstructionCompany(ConstructionCompany $construction_company): PropertyData
    {
        $this->construction_company = $construction_company;
        return $this;
    }

    /**
     * @param string $last_updated_at
     *
     * @return PropertyData
     */
    public function setLastUpdatedAt(string $last_updated_at): PropertyData
    {
        $this->last_updated_at = $last_updated_at;
        return $this;
    }

    public static function new(
        int $id,
        string $title,
        ?string $description,
        string $status,
        string $deleted,
        string $address_display_type,
        array $unit,
        Building $building,
        ConstructionCompany $construction_company,
        string $last_updated_at
    ): self
    {
        return (new static())
            ->setId($id)
            ->setTitle($title)
            ->setDescription($description)
            ->setStatus($status)
            ->setDeleted($deleted)
            ->setAddressDisplayType($address_display_type)
            ->setUnit($unit)
            ->setBuilding($building)
            ->setConstructionCompany($construction_company)
            ->setLastUpdatedAt($last_updated_at);
    }
}

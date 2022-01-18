<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class EnterpriseData
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    protected ?string $description = null;
    protected ?string $status;
    protected ?string $deleted;
    protected ?string $address_display_type;
    protected ?array $unit;
    protected Building $building;
    protected ConstructionCompany $construction_company;
    protected ?string $last_updated_at;

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
    public function getStatus(): ?string
    {
        return $this->status;
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
    public function getAddressDisplayType(): ?string
    {
        return $this->address_display_type;
    }

    /**
     * @return array|null
     */
    public function getUnit(): ?array
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
     * @return string|null
     */
    public function getLastUpdatedAt(): ?string
    {
        return $this->last_updated_at;
    }

    /**
     * @param int $id
     *
     * @return EnterpriseData
     */
    public function setId(int $id): EnterpriseData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $title
     *
     * @return EnterpriseData
     */
    public function setTitle(?string $title): EnterpriseData
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $description
     *
     * @return EnterpriseData
     */
    public function setDescription(?string $description): EnterpriseData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $status
     *
     * @return EnterpriseData
     */
    public function setStatus(?string $status): EnterpriseData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $deleted
     *
     * @return EnterpriseData
     */
    public function setDeleted(?string $deleted): EnterpriseData
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @param string|null $address_display_type
     *
     * @return EnterpriseData
     */
    public function setAddressDisplayType(?string $address_display_type): EnterpriseData
    {
        $this->address_display_type = $address_display_type;
        return $this;
    }

    /**
     * @param array|null $unit
     *
     * @return EnterpriseData
     */
    public function setUnit(?array $unit): EnterpriseData
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @param Building $building
     *
     * @return EnterpriseData
     */
    public function setBuilding(Building $building): EnterpriseData
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @param ConstructionCompany $construction_company
     *
     * @return EnterpriseData
     */
    public function setConstructionCompany(ConstructionCompany $construction_company): EnterpriseData
    {
        $this->construction_company = $construction_company;
        return $this;
    }

    /**
     * @param string|null $last_updated_at
     *
     * @return EnterpriseData
     */
    public function setLastUpdatedAt(?string $last_updated_at): EnterpriseData
    {
        $this->last_updated_at = $last_updated_at;
        return $this;
    }

    public static function new(
        int $id,
        ?string $title,
        ?string $description,
        ?string $status,
        ?string $deleted,
        ?string $address_display_type,
        ?array $unit,
        Building $building,
        ConstructionCompany $construction_company,
        ?string $last_updated_at
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

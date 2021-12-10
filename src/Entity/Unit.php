<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected ?string $title = null;
    protected string $price;
    protected ?int $bathroom;
    protected string $type;
    protected ?int $dorms;
    protected ?int $suites;
    protected ?int $parking_spaces = null;
    protected string $util_area;
    protected string $private_area;
    protected string $total_area;
    protected ?string $rental_value = null;

    /**
     * @return string|null
     */
    public function getRentalValue(): ?string
    {
        return $this->rental_value;
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
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return int|null
     */
    public function getParkingSpaces(): ?int
    {
        return $this->parking_spaces;
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
     * @return string
     */
    public function getPrivateArea(): string
    {
        return $this->private_area;
    }

    /**
     * @return string
     */
    public function getTotalArea(): string
    {
        return $this->total_area;
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
     * @param string $price
     *
     * @return Unit
     */
    public function setPrice(string $price): Unit
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param int|null $parking_spaces
     *
     * @return Unit
     */
    public function setParkingSpaces(?int $parking_spaces): Unit
    {
        $this->parking_spaces = $parking_spaces;
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
     * @param string $private_area
     *
     * @return Unit
     */
    public function setPrivateArea(string $private_area): Unit
    {
        $this->private_area = $private_area;
        return $this;
    }

    /**
     * @param string $total_area
     *
     * @return Unit
     */
    public function setTotalArea(string $total_area): Unit
    {
        $this->total_area = $total_area;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathroom;
    }

    /**
     * @param int|null $bathroom
     *
     * @return Unit
     */
    public function setBathroom(?int $bathroom): Unit
    {
        $this->bathroom = $bathroom;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Unit
     */
    public function setType(string $type): Unit
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUtilArea(): string
    {
        return $this->util_area;
    }

    /**
     * @param string $util_area
     *
     * @return Unit
     */
    public function setUtilArea(string $util_area): Unit
    {
        $this->util_area = $util_area;
        return $this;
    }
}

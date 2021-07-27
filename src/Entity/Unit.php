<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected string $title;
    protected string $price;
    protected int $parking_spaces;
    protected int $dorms;
    protected int $suites;
    protected string $private_area;
    protected string $total_area;

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
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getParkingSpaces(): int
    {
        return $this->parking_spaces;
    }

    /**
     * @return int
     */
    public function getDorms(): int
    {
        return $this->dorms;
    }

    /**
     * @return int
     */
    public function getSuites(): int
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
     * @param string $title
     *
     * @return Unit
     */
    public function setTitle(string $title): Unit
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
     * @param int $parking_spaces
     *
     * @return Unit
     */
    public function setParkingSpaces(int $parking_spaces): Unit
    {
        $this->parking_spaces = $parking_spaces;
        return $this;
    }

    /**
     * @param int $dorms
     *
     * @return Unit
     */
    public function setDorms(int $dorms): Unit
    {
        $this->dorms = $dorms;
        return $this;
    }

    /**
     * @param int $suites
     *
     * @return Unit
     */
    public function setSuites(int $suites): Unit
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
}

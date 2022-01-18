<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Building
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    protected ?string $incorporation_registration;
    protected ?string $type;
    protected ?int $enterprise_status;
    protected ?bool $rent;
    protected ?array $gallery;
    protected ?array $video;
    protected ?array $tour_360;
    protected ?string $rental_value;
    protected Address $address;
    protected ?string $text_address;
    protected ?array $cover;
    protected Features $features;

    public function galleryItemType(): string
    {
        return Gallery::class;
    }

    public function videoItemType(): string
    {
        return Video::class;
    }

    public function tour_360ItemType(): string
    {
        return Video::class;
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
        return $this->tour_360;
    }

    /**
     * @param array|null $tour_360
     *
     * @return Building
     */
    public function setTour360(?array $tour_360): Building
    {
        $this->tour_360 = $tour_360;
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
        return $this->text_address;
    }

    /**
     * @param string|null $text_address
     *
     * @return Building
     */
    public function setTextAddress(?string $text_address): Building
    {
        $this->text_address = $text_address;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCover(): ?array
    {
        return $this->cover;
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
     * @return Features
     */
    public function getFeatures(): Features
    {
        return $this->features;
    }

    /**
     * @param Features $features
     *
     * @return Building
     */
    public function setFeatures(Features $features): Building
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
     * @return int|null
     */
    public function getEnterpriseStatus(): ?int
    {
        return $this->enterprise_status;
    }

    /**
     * @param int|null $enterprise_status
     *
     * @return Building
     */
    public function setEnterpriseStatus(?int $enterprise_status): Building
    {
        $this->enterprise_status = $enterprise_status;
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
        return $this->incorporation_registration;
    }

    /**
     * @return string|null
     */
    public function getRentalValue(): ?string
    {
        return $this->rental_value;
    }
}

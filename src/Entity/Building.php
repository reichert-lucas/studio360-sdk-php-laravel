<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Building
{
    use Serializable;

    protected int $id;
    protected string $title;
    protected array $gallery;
    protected array $video;
    protected array $tour_360;
    protected Address $address;
    protected string $text_address;
    protected array $cover;
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Building
     */
    public function setTitle(string $title): Building
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array
     */
    public function getGallery(): array
    {
        return $this->gallery;
    }

    /**
     * @param array $gallery
     *
     * @return Building
     */
    public function setGallery(array $gallery): Building
    {
        $this->gallery = $gallery;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideo(): array
    {
        return $this->video;
    }

    /**
     * @param array $video
     *
     * @return Building
     */
    public function setVideo(array $video): Building
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return array
     */
    public function getTour360(): array
    {
        return $this->tour_360;
    }

    /**
     * @param array $tour_360
     *
     * @return Building
     */
    public function setTour360(array $tour_360): Building
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
     * @return string
     */
    public function getTextAddress(): string
    {
        return $this->text_address;
    }

    /**
     * @param string $text_address
     *
     * @return Building
     */
    public function setTextAddress(string $text_address): Building
    {
        $this->text_address = $text_address;
        return $this;
    }

    /**
     * @return array
     */
    public function getCover(): array
    {
        return $this->cover;
    }

    /**
     * @param array $cover
     *
     * @return Building
     */
    public function setCover(array $cover): Building
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
}

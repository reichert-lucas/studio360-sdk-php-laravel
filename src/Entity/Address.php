<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Address
{
    use Serializable;

    protected string $street_name;
    protected string $street_number;
    protected ?string $neighborhood;
    protected ?string $complement = null;
    protected string $zip_code;
    protected string $city;
    protected string $state;
    protected string $country;
    protected string $latitude;
    protected string $longitude;

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->street_name;
    }

    /**
     * @param string $street_name
     *
     * @return Address
     */
    public function setStreetName(string $street_name): Address
    {
        $this->street_name = $street_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->street_number;
    }

    /**
     * @param string $street_number
     *
     * @return Address
     */
    public function setStreetNumber(string $street_number): Address
    {
        $this->street_number = $street_number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     *
     * @return Address
     */
    public function setNeighborhood(?string $neighborhood): Address
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     *
     * @return Address
     */
    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zip_code;
    }

    /**
     * @param string $zip_code
     *
     * @return Address
     */
    public function setZipCode(string $zip_code): Address
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return Address
     */
    public function setState(string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     *
     * @return Address
     */
    public function setLatitude(string $latitude): Address
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     *
     * @return Address
     */
    public function setLongitude(string $longitude): Address
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function new(
        string $street_name,
        string $street_number,
        ?string $neighborhood,
        ?string $complement,
        string $zip_code,
        string $city,
        string $state,
        string $country,
        string $latitude,
        string $longitude
    ): self {
        return (new static())
            ->setStreetName($street_name)
            ->setStreetNumber($street_number)
            ->setNeighborhood($neighborhood)
            ->setComplement($complement)
            ->setZipCode($zip_code)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
}

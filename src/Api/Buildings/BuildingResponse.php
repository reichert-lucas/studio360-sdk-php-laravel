<?php

namespace Jetimob\Studio360\Api\Buildings;

use Jetimob\Studio360\Api\Studio360Response;
use Jetimob\Studio360\Entity\PropertyData;

class BuildingResponse extends Studio360Response
{
    protected ?PropertyData $data;

    /**
     * @return PropertyData|null
     */
    public function getData(): ?PropertyData
    {
        return $this->data ?? null;
    }
}

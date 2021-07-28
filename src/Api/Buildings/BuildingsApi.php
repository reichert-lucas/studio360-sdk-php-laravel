<?php

namespace Jetimob\Studio360\Api\Buildings;

use GuzzleHttp\RequestOptions;
use Jetimob\Studio360\Api\AbstractApi;

class BuildingsApi extends AbstractApi
{
    public function list(int $page = 1): BuildingsResponse
    {
        return $this->mappedGet('empreendimentos', BuildingsResponse::class, [
            RequestOptions::JSON => ['page' => $page],
        ]);
    }

    public function find(int $buildingId): BuildingResponse
    {
        return $this->mappedGet("empreendimento/$buildingId", BuildingResponse::class);
    }
}

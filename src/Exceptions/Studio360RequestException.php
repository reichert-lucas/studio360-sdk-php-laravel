<?php

namespace Jetimob\Studio360\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class Studio360RequestException extends RequestException implements Studio360Exception, HydratableContract
{
    use Serializable;

    protected ?bool $status = null;
    protected ?array $data = [];
    protected Errors $errors;

    /**
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @return Errors
     */
    public function getErrors(): Errors
    {
        return $this->errors;
    }
}

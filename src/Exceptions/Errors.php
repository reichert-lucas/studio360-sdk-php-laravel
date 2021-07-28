<?php

namespace Jetimob\Studio360\Exceptions;

use Jetimob\Http\Traits\Serializable;

class Errors
{
    use Serializable;

    protected ?string $token = null;

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $token
     *
     * @return Errors
     */
    public function setToken(?string $token): Errors
    {
        $this->token = $token;
        return $this;
    }
}

<?php

namespace Jetimob\Studio360\Api;

use Jetimob\Http\AbstractApi as HttpAbstractApi;
use Jetimob\Http\Request;
use Jetimob\Studio360\Exceptions\Studio360Exception;
use Jetimob\Studio360\Studio360;

abstract class AbstractApi extends HttpAbstractApi
{
    protected ?string $exceptionClass = Studio360Exception::class;

    /**
     * AbstractApi constructor.
     */
    public function __construct(Studio360 $studio360)
    {
        parent::__construct($studio360);
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}

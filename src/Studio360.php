<?php

namespace Jetimob\Studio360;

use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;
use Jetimob\Studio360\Api\Buildings\BuildingsApi;

class Studio360 implements HttpProviderContract
{
    protected Http $client;
    protected array $config;

    public function __construct(array $config = [])
    {
        $this->client = new Http($config['http'] ?? []);
        $this->config = $config;
    }

    /**
     * @return Http
     */
    public function getClient(): Http
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    public function getHttpInstance(): Http
    {
        return $this->client;
    }

    public function buildings(): BuildingsApi
    {
        return new BuildingsApi($this);
    }
}

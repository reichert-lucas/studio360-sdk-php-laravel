<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Logo
{
    use Serializable;

    protected string $url;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Logo
     */
    public function setUrl(string $url): Logo
    {
        $this->url = $url;
        return $this;
    }

    public static function new(string $url):self
    {
        return (new static())
            ->setUrl($url);
    }
}

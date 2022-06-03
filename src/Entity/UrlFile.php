<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class UrlFile
{
    use Serializable;

    protected ?string $url;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public static function new(?string $url): self
    {
        return (new static())
            ->setUrl($url);
    }
}

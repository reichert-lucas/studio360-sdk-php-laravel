<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class GalleryFiles
{
    use Serializable;

    protected ?string $url;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return GalleryFiles
     */
    public function setUrl(?string $url): GalleryFiles
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

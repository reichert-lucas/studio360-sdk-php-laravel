<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Video
{
    use Serializable;

    protected ?string $link;

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     *
     * @return Video
     */
    public function setLink(?string $link): Video
    {
        $this->link = $link;
        return $this;
    }

    public static function new(?string $link):self
    {
        return (new static())
            ->setLink($link);
    }
}

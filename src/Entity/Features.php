<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Features
{
    use Serializable;

    protected ?string $type;

    /** @var string[]|array|null $tags */
    protected ?array $tags;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return Features
     */
    public function setType(?string $type): Features
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array|null $tags
     *
     * @return Features
     */
    public function setTags(?array $tags): Features
    {
        $this->tags = $tags;
        return $this;
    }

    public function new(?string $type, ?array $tags): self
    {
        return (new static())
            ->setType($type)
            ->setTags($tags);
    }
}

<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Features
{
    use Serializable;

    protected string $type;

    /** @var string[]|array $tags */
    protected array $tags;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Features
     */
    public function setType(string $type): Features
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return Features
     */
    public function setTags(array $tags): Features
    {
        $this->tags = $tags;
        return $this;
    }

    public function new(string $type, array $tags): self
    {
        return (new static())
            ->setType($type)
            ->setTags($tags);
    }
}

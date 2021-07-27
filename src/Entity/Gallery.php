<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Gallery
{
    use Serializable;

    protected string $title;
    protected array $files;

    public function filesItemType(): string
    {
        return GalleryFiles::class;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param string $title
     *
     * @return Gallery
     */
    public function setTitle(string $title): Gallery
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param array $files
     *
     * @return Gallery
     */
    public function setFiles(array $files): Gallery
    {
        $this->files = $files;
        return $this;
    }

    public static function new(string $title, array $files): self
    {
        return (new static())
            ->setTitle($title)
            ->setFiles($files);
    }
}

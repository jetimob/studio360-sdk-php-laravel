<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class Gallery
{
    use Serializable;

    protected ?string $files = null;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getFiles(): ?string
    {
        return $this->files;
    }

    /**
     * @param string|null $title
     *
     * @return Gallery
     */
    public function setTitle(?string $title): Gallery
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param array|null $files
     *
     * @return Gallery
     */
    public function setFiles(?array $files): Gallery
    {
        $this->files = $files;
        return $this;
    }

    public static function new(?string $title, ?array $files): self
    {
        return (new static())
            ->setTitle($title)
            ->setFiles($files);
    }
}

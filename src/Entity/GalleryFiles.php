<?php

namespace Jetimob\Studio360\Entity;

use Jetimob\Http\Traits\Serializable;

class GalleryFiles extends UrlFile
{
    use Serializable;

    protected ?string $title = null;
    protected ?array $files = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getFiles(): ?array
    {
        return $this->files;
    }

    public function setFiles(?array $files): void
    {
        $this->files = $files;
    }
}

<?php


namespace App;


trait HasModelImage
{
    public function setImage($image)
    {
        $this->clearMediaCollection('model-image');

        return $this->addMedia($image)->preservingOriginal()->toMediaCollection('model-image');
    }

    public function imageUrl($conversion = '')
    {
        $image = $this->getFirstMedia('model-image');

        return $image ? $image->getUrl($conversion) : static::DEFAULT_IMAGE_SRC;
    }

    public function clearModelImage()
    {
        $this->clearMediaCollection('model-image');
    }

    public function hasModelImage()
    {
        return $this->getMedia('model-image')->count() > 0;
    }
}
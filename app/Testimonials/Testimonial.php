<?php

namespace App\Testimonials;

use App\HasModelImage;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

class Testimonial extends Model implements HasMediaConversions
{
    use HasMediaTrait, HasModelImage;

    const DEFAULT_IMAGE_SRC = '/images/defaults/four_by_three.jpg';

    protected $table = 'testimonials';

    protected $fillable = ['client', 'body'];

    protected $casts = ['published' => 'boolean'];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
             ->width(400)
             ->height(300)
             ->keepOriginalImageFormat()
             ->performOnCollections('model-image')
             ->optimize();
    }

    public function publish()
    {
        $this->published = true;
        $this->save();
    }

    public function retract()
    {
        $this->published = false;
        $this->save();
    }

    public function toJsonableArray()
    {
        return [
            'id'        => $this->id,
            'client'    => $this->client,
            'body'      => $this->body,
            'published' => $this->published,
            'thumb_img' => $this->imageUrl('thumb')
        ];
    }
}

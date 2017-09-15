<?php

namespace App\Http\Controllers\Admin;

use App\Testimonials\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsImageController extends Controller
{
    public function store(Testimonial $testimonial)
    {
        request()->validate(['image' => 'required|image']);

        $testimonial->setImage(request('image'));
    }

    /**
     *@test
     */
    public function delete(Testimonial $testimonial)
    {
        $testimonial->clearModelImage();
    }
}

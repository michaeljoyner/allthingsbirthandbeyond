<?php

namespace App\Http\Controllers\Admin;

use App\Testimonials\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublishedTestimonialsController extends Controller
{
    public function store()
    {
        request()->validate(['testimonial_id' => 'required|exists:testimonials,id']);

        $testimonial = Testimonial::find(request('testimonial_id'))->publish();
    }

    public function delete(Testimonial $testimonial)
    {
        $testimonial->retract();
    }
}

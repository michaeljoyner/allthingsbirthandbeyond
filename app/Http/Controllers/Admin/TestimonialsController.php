<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonialForm;
use App\Testimonials\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonials.index', ['testimonials' => $testimonials]);
    }

    public function store(TestimonialForm $form)
    {
        return Testimonial::create($form->requiredData());
    }

    public function update(Testimonial $testimonial, TestimonialForm $form)
    {
        $testimonial->update($form->requiredData());

        return $testimonial->fresh();
    }

    public function delete(Testimonial $testimonial)
    {
        $testimonial->delete();
    }
}

<?php

namespace App\Http\Controllers\Admin\Services;

use App\Testimonials\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    public function index()
    {
        return Testimonial::latest()->get()->map->toJsonableArray();
    }
}

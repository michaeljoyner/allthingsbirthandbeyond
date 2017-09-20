<?php

namespace App\Http\Controllers;

use App\Testimonials\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.home.page');
    }

    public function about()
    {
        return view('front.about.page');
    }

    public function testimonials()
    {
        $testimonials = Testimonial::where('published', true)->latest()->get();
        return view('front.testimonials.page', ['testimonials' => $testimonials]);
    }

    public function thanks()
    {
        return view('front.thanks');
    }
}

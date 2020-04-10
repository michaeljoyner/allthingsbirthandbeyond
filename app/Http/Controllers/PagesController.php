<?php

namespace App\Http\Controllers;

use App\Testimonials\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $affiliates = [
            [
                'title' => 'Doulas',
                'items' => [
                    [
                        'name' => 'Sarah Robinson - birth doula',
                        'link' => 'http://www.birthbright.com/',
                        'image' => '/images/affiliates/allthings_affiliates_1.jpg',
                    ],
                    [
                        'name' => 'Claire Wells - doula',
                        'link' => '',
                        'image' => '/images/affiliates/allthings_affiliates_2.jpg',
                    ],
                ]
            ],
            [
                'title' => 'Infant Feeding',
                'items' => [
                    [
                        'name' => 'Treasure Chest',
                        'link' => 'http://www.treasurechest.org.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_3.jpg',
                    ],
                    [
                        'name' => 'Nuture Natal',
                        'link' => 'http://www.yorklactationconsultant.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_4.jpg',
                    ],
                    [
                        'name' => 'Ian Mulrooney',
                        'link' => 'http://www.smartway2fitness.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_5.jpg',
                    ],
                ]
            ],
            [
                'title' => 'Classes',
                'items' => [
                    [
                        'name' => 'For Modern Mothers',
                        'link' => 'https://www.formodernmothers.com/',
                        'image' => '/images/affiliates/allthings_affiliates_6.jpg',
                    ],
                    [
                        'name' => 'The Stables Yoga Center',
                        'link' => 'https://stablesyoga.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_7.jpg',
                    ],
                ]
            ],
            [
                'title' => 'Health & Wellness',
                'items' => [
                    [
                        'name' => 'Bespoke Botanicals',
                        'link' => 'http://www.bespokebotanicals.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_8.jpg',
                    ],
                    [
                        'name' => 'Anne Gledhill Myhill',
                        'link' => 'https://www.annegledhill-myhill.com/',
                        'image' => '/images/affiliates/allthings_affiliates_9.jpg',
                    ],
                    [
                        'name' => 'My Still Point',
                        'link' => 'http://www.mystillpoint.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_10.jpg',
                    ],
                ]
            ],
            [
                'title' => 'Other',
                'items' => [
                    [
                        'name' => 'York Sling Library',
                        'link' => 'http://www.yorkslinglibrary.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_11.jpg',
                    ],
                    [
                        'name' => 'Happy Homebirth',
                        'link' => 'https://www.happyhomebirth.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_12.jpg',
                    ],
                    [
                        'name' => 'Photography by Edina',
                        'link' => 'http://www.photographybyedina.co.uk/',
                        'image' => '/images/affiliates/allthings_affiliates_13.jpg',
                    ],
                ]
            ],
        ];
        return view('front.home.page', ['affiliates' => $affiliates]);
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

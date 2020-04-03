<?php

namespace App\Http\Controllers;

use App\AntiSpammer;
use App\Mail\ContactMessage;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function show()
    {
        return view('front.contact.page');
    }

    public function store(Client $client)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required_without:phone|email',
            'phone' => 'required_without:email',
            'recaptcha_token' => 'required'
        ]);

        if(!AntiSpammer::accepts(request('recaptcha_token'))) {
            return redirect("/");
        }



        Mail::to('hello@allthingsbirthandbeyond.co.uk')->send(new ContactMessage(request()->only(['name', 'email', 'phone', 'enquiry'])));
        return redirect('/thanks')->with(['sender' => request('name')]);
    }
}

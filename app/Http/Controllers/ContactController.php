<?php

namespace App\Http\Controllers;

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

        $response = $client->post("https://www.google.com/recaptcha/api/siteverify", [
            'form_params' => [
                'secret' => config('services.google.recaptcha.secret'),
                'response' => request('recaptcha_token')
            ]
        ]);

        $contents = json_decode($response->getBody()->getContents(), true);
        $score = Arr::get($contents, 'score', 0);
        $action = Arr::get($contents, 'action', '');

        if($score < 0.5 || $action !== 'contact_form') {
            return redirect('/');
        }

        Mail::to('hello@allthingsbirthandbeyond.co.uk')->send(new ContactMessage(request()->only(['name', 'email', 'phone', 'enquiry'])));
        return redirect('/thanks')->with(['sender' => request('name')]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function show()
    {
        return view('front.contact.page');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required_without:phone|email',
            'phone' => 'required_without:email'
        ]);

        Mail::to('joyner.michael@gmail.com')->send(new ContactMessage(request()->only(['name', 'email', 'phone', 'enquiry'])));
        return redirect('/thanks')->with(['sender' => request('name')]);
    }
}

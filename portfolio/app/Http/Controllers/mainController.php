<?php

namespace App\Http\Controllers;

use App\Mail\contactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mainController extends Controller
{
    function profile(){
        return view('profile');
    }

    function store(){
        $contact_form_data = request()->all();
        Mail::to('pavelkhan255@gmail.com')->send(new contactForm($contact_form_data));
        return redirect('/')->with('status','Your message has been sent.');
    }
}

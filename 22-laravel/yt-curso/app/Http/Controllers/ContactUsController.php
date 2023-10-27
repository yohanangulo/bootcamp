<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {

        return view('contact_us.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',  
            'email' => ['required', 'email'],
            'message' => 'required',
        ]);

        Mail::to('anguloyohan98@gmail.com')->send(new ContactUsMailable($request->all()));

        // session()->flash('info', 'Mensaje enviado');

        return redirect()->route('contact_us.index')->with('info', 'Message sent');
    }
}

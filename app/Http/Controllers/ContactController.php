<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('hawanatamang@gmail.com')->send(new ContactFormMail(
            $data['name'],
            $data['email'],
            $data['subject'],
            $data['message']

        ));

        return redirect()-> back()->with('success', 'Your message has been sent successfully');
    }
}

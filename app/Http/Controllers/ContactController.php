<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactMail;
use App\Mail\AdminContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'nullable|string',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:1000',
            'check' => 'accepted',
        ]);
        session()->put('contact', $data);
        return view('contact.confirm', compact('data'));
    }

    public function complete()
    {
        $data = session()->get('contact');
        Mail::to($data['email'])->send(new UserContactmail($data));
        Mail::to(config('mail.from.address'))->send(new AdminContactMail($data));
        return view('contact.complete');
    }
}

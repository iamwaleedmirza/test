<?php

namespace AsimZareen\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AsimZareen\Contact\Models\Contact;
use AsimZareen\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $req)
    {
        Mail::to(config('contact.sent_email'))->send(new ContactMailable($req->msg, $req->email));
        Contact::create($req->all());

        return 'user record created successfully!';
        return view('contact::contact');
    }
}

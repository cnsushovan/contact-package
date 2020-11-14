<?php

namespace Ssdpkg\Contact\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ssdpkg\Contact\Models\Contact;
use Ssdpkg\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index() {
        return view ('contact::contact');
    }

    public function send(Request $request) {
        
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}

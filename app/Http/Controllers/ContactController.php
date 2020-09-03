<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function store()
    {
        request()->validate(['email'=>'required|email']);
//        $to_name="lalala Ba";
//        $to_email="memberd123@gmail.com";
        Mail::to(request('email'))
            ->send(new Contact());
        return redirect('/password/reset')
            ->with('message', 'Email sent');
    }
}

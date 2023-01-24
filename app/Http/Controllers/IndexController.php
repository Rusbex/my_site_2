<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

//    public function contactForm(ContactFormRequest $request)
//    {
//        Mail::send(['text' => 'contactForm'], ['name', 'Web dev blog'], function ($message) {
//            $message->to('rustam@biggrin.kz', 'To web dev blog')->subject('Test email');
//            $message->from('rustam@biggrin.kz', 'To web dev blog');
//
//
//        });
////
//
//}


    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to('rustam@biggrin.kz')->send(new ContactForm($request->validated()));
        $contact = new contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->text = $request->input('text');
        $contact->save();

        return redirect(route('home'));
    }
}

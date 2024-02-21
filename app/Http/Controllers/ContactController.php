<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
            $validated=$request->validate([
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required'
            ]);

            $contact= new Contact;
             $contact->name = $validated['name'];
             $contact->email = $validated['email'];
             $contact->subject = $validated['subject'];
             $contact->message = $validated['message'];
            $contact->save();
            return view('web.contact');
        }
}

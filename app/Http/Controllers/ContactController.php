<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contactus');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required',
            'disclaimer' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/contactus')
                ->withErrors($validator)
                ->withInput();
        }


        $contact = new Contact();
        $contact->first_name = $request->input('firstName');
        $contact->last_name = $request->input('lastName');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('number');
        $contact->message = $request->input('message');
        $contact->save();

        
        
        return redirect('/contactus')->with('success', 'Your message has been sent successfully.');
    }
}


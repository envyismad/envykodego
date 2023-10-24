<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contactus');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        
        return redirect('/contactus')->with('success', 'Your message has been sent successfully.');
    }
}


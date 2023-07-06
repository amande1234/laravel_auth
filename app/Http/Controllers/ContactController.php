<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function view(Request $request){
        return view('contact');

    }
    
    public function submit(Request $request)
    {



        $request->validate([
            'Name' => 'required',
            'Phone' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Photo' => 'required',
            

        ]);
        $image = time() . '.' . $request->file('Photo')->extension();

        $request->file('Photo')->move(public_path('images'), $image);

        $contact=Contact::create($_REQUEST);

        if ($contact) {
            $contact->image=$image;
            $contact->save();
            $request->session()->flash('success', 'data submitted successfully');
        } else {
            $request->session()->flash('error', 'data not submitted successfully');
        }

        return back();
    }
  

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function view(Request $request)
    {
        return view('contact');
    }

    public function submit(Request $request)
    {



        $request->validate([
            'Name' => 'required',
            'Phone' => 'required',
            'Address' => 'required',
            'Email' => 'required|min:4|unique:contacts',
            'Photo' => 'required',


        ]);
        $image = time() . '.' . $request->file('Photo')->extension();

        $request->file('Photo')->move(public_path('images'), $image);

        $contact = Contact::create($_REQUEST);

        if ($contact) {
            $contact->photo = $image;
            $contact->created_by = auth()->user()->id;
            $contact->save();
            $request->session()->flash('success', 'data submitted successfully');
        } else {
            $request->session()->flash('error', 'data not submitted successfully');
        }

        return back();
    }

    public function list(Request $request)
    {
        $contact = Contact::all();
        //print_r($contact);
        return view('list', ['contact' => $contact]);
    }
    public function delete(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contactDeleted = $contact->delete();

        if ($contactDeleted) {
            $request->session()->flash('success', 'entry ' . $id . ' deleted');
        } else {
            $request->session()->flash('error', 'something went wrong');
        }

        return back();
    }
    public function edit(Request $request, $id)
    {

        $details = Contact::find($id);
        return view('edit', ['details' => $details]);
    }


    public function edit_question(Request $request)
    {   
       


        $request->validate([
            'name' => 'required|min:4',
            'phone' => 'required|min:4',
            'address' => 'required|min:4',

          
            'photo_val'=> 'required'


        ]);

        $id = $request->id;

        $contactObj = Contact::find($id);

        $contactObj->name = $request->name;
        $contactObj->phone= $request->phone;

        $contactObj->address = $request->address;
        //$contactObj->email = $request->email;
        $contactObj->photo = $request->photo;
 

        if ($contactObj->save()) {


            return back();
        }
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Dump the request data to inspect what is being received
        // dd($request->all());

        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->phone_number = $request->phone_number;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $request->session()->flash('success', 'THANKING YOU!');

        // Redirect back to the form
        return redirect()->back();
    }
}


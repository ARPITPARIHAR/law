<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contactinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactInfoController extends Controller
{
    public function create()
    {
        return view('admin.contacts.create');
    }
   


    public function store(Request $request)
    {
    

        $contact = new Contactinfo;
        $contact->phone_number = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
      
        $contact->save();

        $request->session()->flash('success', 'THANKING YOU!');

       
        return redirect()->back();
    }

    public function index()
    {
        $contactInfos = ContactInfo::all(); // Fetch all ContactInfo records

        return view('user.home', ['contactInfos' => $contactInfos]);
    }
}

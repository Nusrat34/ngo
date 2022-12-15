<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactus(){

        return view('Frontend.pages.contact.cform');
    }

    public function contact(Request $request){
        Contact::create ([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        return redirect()-> route('webpage');

    }
    public function message(){
        $contact=Contact::all();
        return view('backend.pages.contacts.contactlist',compact('contact'));
    }

    public function delete($contact_id) 
    {
        contact::findOrFail($contact_id)->delete();
        return redirect()->back()->with('message','contact deleted successfully');

        
  
  
  }
}

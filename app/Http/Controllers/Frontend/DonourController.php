<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;


class DonourController extends Controller
{
    public function donateform(){

        return view('backend.pages.donors.donor');
    }


    public function store(Request $request){
    //    dd($request);
        Donor::create([
            //database column name => input field name
                'name'=>$request->name ,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'address'=>$request->address,
                'occupation'=>$request->occupation,
                'amount'=>$request->amount,
                'account_number'=>$request->account_number,
                
                
        ]);
        notify()->success('thanks for your donation');

        return redirect()->route('webpage');
    }
    
}





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
                'password'=>$request->password,
                'phone_number'=>$request->phone_number,
                'address'=>$request->address,
                'occupation'=>$request->occupation,
                'amount'=>$request->amount,
                'from_account'=>$request->from_account,
                'to_account'=>$request->to_account,
        ]);

        return redirect()->route('webpage');
    }
    
}





<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function list(){

        $don=Donation::all();

       return view('backend.pages.donations.donationlist',compact('don')) ;
    }



    public function applydonation (Request $request){
        //    dd($request);
            Donation::create([
                //database column name => input field name
                    'name'=>$request->name ,
                    'email'=>$request->email,
                    'phone_number'=>$request->phone_number,
                    'address'=>$request->address,
                    'amount'=>$request->amount,
                    'cause'=>$request->cause,
                    
            ]);
    
            return redirect()->route('webpage');
        }


        public function donationlist(){
            $don=Donation::all();
            return view('Frontend.pages.donation.applydonationlist',compact('don'));
        }
}

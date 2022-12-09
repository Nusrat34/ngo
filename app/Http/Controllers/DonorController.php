<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    public function donor(){
        $dot=Donor::all();


        return view('backend.pages.donors.donor',compact('dot'));
    }


    
    public function donorapprove($donor_id){

        $donor=Donor::find($donor_id)->update([
            'status'=>'approved'
        ]);
        
        return back();
    }
        

        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Transcation;
use Illuminate\Support\Str;

class DonorController extends Controller
{
    public function donor(){
        $dot=Donor::paginate(4);


        return view('backend.pages.donors.donor',compact('dot'));
    }


    
    public function donorapprove($donor_id){
        $donor=Donor::find($donor_id);
            
        Transcation::create([
            'trax_head'=>Str::random(12),
            'in'=>true,
            'recievers_account_no'=>$donor->from_account
        ]);
        $donor->update ([
            'status'=>'approved'
        ]);
        
        return back();
    }
        
    public function donorlist(){
        $dot=Donor::paginate(4);

        return view('Frontend.pages.donor.dlist',compact('dot'));
    }
        
}

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


    
    
        

        
}

<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        
        return view('master');
    }

    public function dashboard() {
        $donationTable = Donor::sum('amount');
        // dd($donationTable);
        return view('backend.pages.dashboard',compact('donationTable'));
    }
}

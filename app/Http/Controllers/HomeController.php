<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        
        return view('master');
    }

    public function dashboard() {
        $donationTable = Donor::sum('amount');
        $scholarship=Scholarship::sum('amount');
        // dd($donationTable);
        return view('backend.pages.dashboard',compact('donationTable','scholarship'));
    }
}

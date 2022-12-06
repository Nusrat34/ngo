<?php

namespace App\Http\Controllers;

use App\Models\Student_donation;
use Illuminate\Http\Request;

class StudentDonationController extends Controller
{
    public function studentlist(){
        return view('Frontend.pages.sdonation.rdonationform');
    }


    public function sdonation (Request $request){
        //    dd($request);
           Student_donation ::create([
                //database column name => input field name
                    'title'=>$request->title ,
                    'amount'=>$request->amount,
                    'institute'=>$request->institute,
                    'address'=>$request->address,
                    'status'=>$request->status,
                    'cause'=>$request->cause,
            ]);
    
            return redirect()->route('webpage');
        }

        public function requestlist(){
            $stu=Student_donation::all();
            return view('backend.pages.students.studentlist',compact('stu'));
        }
}

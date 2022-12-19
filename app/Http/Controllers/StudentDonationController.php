<?php

namespace App\Http\Controllers;

use App\Models\Student_donation;
use App\Models\Transcation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StudentDonationController extends Controller
{
    public function studentlist(){
        $stu=Student_donation::paginate(10);
        return view('Frontend.pages.sdonation.rdonationform');
    }


    public function sdonation (Request $request){
        //    dd($request);
           Student_donation ::create([
                //database column name => input field name
                    'title'=>$request->title ,
                    'name'=>$request->name ,
                    'email'=>$request->email,
                    'phone_number'=>$request->phone_number,
                    'amount'=>$request->amount,
                    'institute'=>$request->institute,
                    'address'=>$request->address,
                    'account_number'=>$request->account_number,
                    'cause'=>$request->cause,
            ]);
            notify()->success('apply success');
    
            return redirect()->route('webpage');
        }

        public function requestlist(){
            $stu=Student_donation::paginate(4);
            return view('backend.pages.students.studentlist',compact('stu'));
        }


        public function studentdonation($student_id){
            $stu=Student_donation::find($student_id);
            Transcation::create([
                'trax_head'=>Str::random(12),
                'out'=>true,
                'recievers_account_no'=>$stu->account_number
            ]);
            $stu->update ([
                'status'=>'approved'
            ]);

            return back();
        }
        
        public function studentshow(){
            $stu=Student_donation::paginate(10);
            return view('Frontend.pages.sdonation.slist',compact('stu'));
        }
}

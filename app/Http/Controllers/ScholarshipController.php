<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function scholarshiplist(){
        $scholar=Scholarship::all();

        return view('backend.pages.scholarships.scholarshiplist',compact('scholar'));
    
    }


    public function s_apply(){
        return view('Frontend.pages.scholarship.sform');
    }


    public function scholarship (Request $request){
        //    dd($request);
            Scholarship::create([
                //database column name => input field name
                    'title'=>$request->title ,
                    'amount'=>$request->amount,
                    'institute'=>$request->institute,
                    'address'=>$request->address,
                    'cause'=>$request->cause,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone_number'=>$request->phone_number,
                    'from_date'=>$request->from_date,
                    'to_date'=>$request->to_date,
            ]);
    
            return redirect()->route('webpage');
        }

    public function scholarupdate($id){
       $scholarship= Scholarship::find($id)->update([
            'status'=>'approved'
        ]);

        return back();
    }


    public function scholarshipshow(){
        $scholar=Scholarship::all();
        return view('Frontend.pages.scholarship.slist',compact('scholar'));
    }
}


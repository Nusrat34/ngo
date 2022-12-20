<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Transcation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function scholarshiplist(){
        $scholar=Scholarship::orderBy('id','desc')->paginate(8);

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
                    'account_number'=>$request->account_number,
            ]);
            notify()->success('apply success');
            
            return redirect()->route('webpage');
        }

    public function scholarupdate($id){
       $scholarship= Scholarship::find($id);
       $scholarship->update([
            'status'=>'approved'
        ]);
        Transcation::create([
            'trax_head'=>Str::random(12),
            'out'=>true,
            'recievers_account_no'=>$scholarship->account_number
        ]);

        return back();
    }


    public function scholarshipshow(){
        $scholar=Scholarship::orderBy('id','desc')->paginate(8);
        return view('Frontend.pages.scholarship.slist',compact('scholar'));
    }
}


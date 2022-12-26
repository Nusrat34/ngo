<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Transcation;
use App\Models\ScholarshipApplication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{

    public function index(){
        $scholarships = Scholarship::orderBy('id','desc')->paginate(5);
        return view('backend.pages.scholarships.scholarships',compact('scholarships'));
    }

    public function create()
    {
        return view('backend.pages.scholarships.create');
    }

    public function store (Request $request){
        $scholarship = new Scholarship;
        $scholarship->name = $request->name;
        $scholarship->amount = $request->amount;
        $scholarship->save();

        notify()->success('Scholarship Added Sucessfully');
        return redirect()->route('scholarships.index');
    }

    public function edit($id)
    {
        # code...
    }

    public function update(Request $request , $id){

    }

    public function destroy($id){

    }

    public function approve_scholarship($id){
        $scholarship_applications=ScholarshipApplication::find($id);
        $scholarship_applications->status = 1;
        $scholarship_applications->save();

        notify()->success('Scholarship Appliation Approved Sucessfully');
        return back();
    }

    public function scholarship_applications(){
        $scholarship_applications=ScholarshipApplication::orderBy('id','desc')->paginate(5);
        return view('backend.pages.scholarships.scholarship_applications',compact('scholarship_applications'));
    }


    public function s_apply(){
        return view('Frontend.pages.scholarship.sform');
    }


    public function scholarship (Request $request){
        //    dd($request);
        $request->validate([
            'title'=>'required',
            'amount'=>'required',
            'phone_number'=>'required',
            'from_date'=>'required',
            'to_date'=>'required',
            'name'=>'required',
            

        ]);
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
        $scholar=Scholarship::orderBy('id','desc')->paginate(5);
        return view('Frontend.pages.scholarship.slist',compact('scholar'));
    }

    public function apply_for_sholarship($id){
        $scholarship = Scholarship::find($id);
        return view('Frontend.pages.scholarship.sform',compact('scholarship'));
    }

    public function scholarship_appliation_store(Request $request)
    {
        $scholarship_apply = new ScholarshipApplication;
        $scholarship_apply->scholarship_id = $request->id;
        $scholarship_apply->user_id = auth()->user()->id;
        $scholarship_apply->note = $request->note;
        $scholarship_apply->save();
        
        notify()->success('apply success');
        return redirect()->route('webpage');
    }    
}


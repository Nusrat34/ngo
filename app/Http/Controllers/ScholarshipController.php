<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Transcation;
use App\Models\ScholarshipApplication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
           
    
        $validation = Validator::make($request->all(),[
            'amount'=>'required|gt:0',
            
        ]);

        if ($validation->messages()->messages()) {
            foreach ($validation->messages()->messages() as $key => $value) {
                foreach ($value as $key => $data) {
                    notify()->error("$data"); 
                }
                
            }
            return redirect()->back();
            
            }

        $scholarship = new Scholarship;
        $scholarship->name = $request->name;
        $scholarship->amount = $request->amount;
        $scholarship->description = $request->description;
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

    public function approve_scholarship($id,$perentage){
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
        // dd($request->all());
        if(auth()->user()->hscresult != null && auth()->user()->sscresult != null){

            $totalScore = auth()->user()->hscresult + auth()->user()->sscresult ;
            // dd($totalScore);
            $scholarship = Scholarship::find($request->id);
            // dd($scholarship->amount);
            $scholarship_apply = new ScholarshipApplication;
            // if($totalScore <=10 && $totalScore >8){
            //     $scholarship_apply->applied_amount = $scholarship->amount;
            //     $scholarship_apply->percentage = '100';
            // }elseif($totalScore <=8 && $totalScore >6){
            //     $scholarship_apply->applied_amount = ($scholarship->amount * 90 / 100);
            //     $scholarship_apply->percentage = '90';
            // }elseif($totalScore <=6 && $totalScore >4){
            //     $scholarship_apply->applied_amount = ($scholarship->amount * 80 / 100);
            //     $scholarship_apply->percentage = '80';
              
            // }elseif($totalScore >=4 && $totalScore <4){
            //     $scholarship_apply->applied_amount = ($scholarship->amount * 70 / 100);
            //     $scholarship_apply->percentage = '70';
            // }else{
            //     $scholarship_apply->applied_amount = 0;
            //     notify()->error('Not enough cgpa to avail any scholarship');
            //     return redirect()->route('webpage');
            // }

            $scholarship_apply->applied_amount = $scholarship->amount;
            $scholarship_apply->percentage = '00';
            $scholarship_apply->amount = $scholarship->amount;

            $scholarship_apply->scholarship_id = $request->id;
            $scholarship_apply->user_id = auth()->user()->id;
            $scholarship_apply->note = $request->note;
            $scholarship_apply->save();
            notify()->success('apply success');
            return redirect()->route('webpage');
        }
        
        
        notify()->error('apply filled up please complete the profile');
        return redirect()->route('webpage');
   
   
    } 
    
    public function scholaredit($id){
        $scholarship =scholarship::find($id);
        return view('backend.pages.scholarships.edit', compact('scholarship'));
    
   
   
    }

    public function scholareshoww(Request $request,$id){
        $scholarship = scholarship::find($id);
        $scholarship->update([
            //database column name => input field name
            'name'=> $request->name,
            'amount'=> $request->amount,
            'description'=> $request->description,
        
    
        ]);
        notify()->success('update success');

        return back();
}

    public function scholarship_applied(){
        $scholarship_applications=ScholarshipApplication::orderBy('id','desc')->paginate(5);
        return view('Frontend.pages.scholarship.scholarshiplist',compact('scholarship_applications'));
    }


public function scholareupdate($scholarship_id){

    $scholarship=ScholarshipApplication::find($scholarship_id);
    
    return view('Backend.pages.Scholarships.update',compact('scholarship'));
}

public function scholarestr(Request $request,$scholarship_id){
    
    $validation = Validator::make($request->all(),[
       
        'percentage'=>'required|numeric|between:0,100'
    ]);

    if ($validation->messages()->messages()) {
        foreach ($validation->messages()->messages() as $key => $value) {
            foreach ($value as $key => $data) {
                notify()->error("$data"); 
            }
            
        }
        return redirect()->back();
        
        }
   
    $scholarship=ScholarshipApplication::find($scholarship_id);
    // dd($scholarship);
   
    $scholarship->update([
        'percentage'=>$request->percentage,
        'applied_amount'=>$scholarship->applied_amount * $request->percentage /100,
        'status'=>1
    ]);
    return to_route('scholarship.appliations');
}

}


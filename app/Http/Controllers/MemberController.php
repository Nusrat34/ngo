<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member(){



        
        
        return view ('backend.pages.members.member');
    }

    public function memberform(){
        return view('backend.pages.members.memberform');
    }

    public function store(Request $request){
    
        //        dd($request->all());
                Member::create([
                    //database column name => input field name
                        'notice_name'=>$request->notice_name ,
                        'status'=>$request->status,
                        'published_date'=>$request->published_date,
                        'description'=>$request->description,
        
                ]);
        
                   
                return redirect()->back();
        
            }
            


}




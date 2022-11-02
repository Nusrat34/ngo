<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Notice;

class NoticeController extends Controller
{
    public function notice(){
        return view ('backend.pages.notices.notice');
    }

    public function noticeform(){
        return view('backend.pages.notices.noticeform');
    }


    public function store(Request $request){
    
        //        dd($request->all());
                Notice::create([
                    //database column name => input field name
                        'name'=>$request->Notice_name ,
                        'status'=>$request->Status,
                        'published_date'=>$request->Published_date,
                        'description'=>$request->Description,
        
                ]);
        
                   
                return redirect()->back();
        
            }
            









}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Notice;

class NoticeController extends Controller
{
    public function notice(){
        

        $not=Notice::all();
        //$not=Notice::paginate(3);//
        //dd($not);

        return view('backend.pages.notices.notice',compact('not'));

    }

    public function noticeform(){
        return view('backend.pages.notices.noticeform');
    }


    public function store(Request $request){
    
        //        dd($request->all());
                Notice::create([
                    //database column name => input field name
                        'notice_name'=>$request->notice_name ,
                        'status'=>$request->status,
                        'published_date'=>$request->published_date,
                        'description'=>$request->description,
        
                ]);
        
                   
                return redirect()->back();
        
            }
            









}




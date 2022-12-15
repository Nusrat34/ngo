<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Notice;

class NoticeController extends Controller
{
    public function notice(){
        

        $not=Notice::paginate(3);
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


            
           public function noticeshow (){
             
            $not=Notice::paginate(4);

           return view('Frontend.pages.notice.noticelist',compact('not'));


           }


    public function notice_edit($notice_id){
        $not=Notice::find($notice_id);
    return view('backend.pages.notices.edit',compact('not'));

    }
    

    public function notice_update(Request $request,$notice_id){
        $not=Notice::find($notice_id);

        $not->update ([
           //database column name => input field name
           'notice_name'=>$request->notice_name ,
           'status'=>$request->status,
           'published_date'=>$request->published_date,
           'description'=>$request->description,

                
    
        
    
           ]);
           return redirect()->route('notice')->with('message','Update success.');
          
    
        }
        public function notice_delete($notice_id){
            $not=Notice::findOrFail($notice_id)->delete();
            return redirect()-> back()->with('message','notice deleted');
        }
}




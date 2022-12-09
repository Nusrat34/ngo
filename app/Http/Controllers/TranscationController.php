<?php

namespace App\Http\Controllers;

use App\Models\Transcation;
use Illuminate\Http\Request;

class TranscationController extends Controller
{
    public function transaction(){
        $tran=Transcation::all();
        return view('backend.pages.transaction.tlist',compact('tran'));
    }


    public function transaction_show (){
        return view('backend.pages.transaction.tform');
    }

    public function t_store(Request $request){
    
        //        dd($request->all());
            Transcation::create([
                    //database column name => input field name
                        'trax_head'=>$request->trax_head ,
                        'in'=>$request->in,
                        'out'=>$request->out,
                        
        
                ]);
        
                   
                return redirect()->back();
        
            }

}






<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loanlist(){
        $loan=Loan::all();
        return view('backend.pages.loans.loanlist',compact('loan'));
    }


       public function loan_form(){
          return view('Frontend.pages.lapply.lform');
       }

      
    public function loan_store (Request $request){
        //    dd($request);
            Loan::create([
                //database column name => input field name
                    'amount'=>$request->amount,
                    'institute'=>$request->institute,
                    'address'=>$request->address,
                    'cause'=>$request->cause,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone_number'=>$request->phone_number,
                    'father_name'=>$request->father_name,
                    'mother_name'=>$request->mother_name,
                    'father_occupation'=>$request->father_occupation,
                    'family_member'=>$request->family_member,
                    
            ]);
    
            return redirect()->route('webpage');
        }
}

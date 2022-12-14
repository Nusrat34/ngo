<?php

namespace App\Http\Controllers;

use App\Models\AppliedBook;
use App\Models\Book;
use App\Models\Donor;
use App\Models\ScholarshipApplication;
use App\Models\Transcation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report(){
        return view('backend.pages.report.reportform');
    }
    

    public function reportSearch(Request $request)
    
    {
//        $request->validate([
//            'from_date'    => 'required|date',
//            'to_date'      => 'required|date|after:from_date',
//        ]);

        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



       $from=$request->from_date;
       $to=$request->to_date;


//       $status=$request->status;

        $applied_books=AppliedBook::whereBetween('created_at', [$from, $to])->get();
        return view('backend.pages.report.reportform',compact('applied_books'));

   
    }
    public function scholarshipreport(){
        return view('backend.pages.report.scholarshipreport');

    }

    public function scholarshipsearch(Request $request)
    
    {
//        $request->validate([
//            'from_date'    => 'required|date',
//            'to_date'      => 'required|date|after:from_date',
//        ]);

        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



        $from=$request->from_date;
        $to=$request->to_date;
 
 
$scholarship_applications=ScholarshipApplication::whereBetween('created_at', [$from, $to])->get();
return view('backend.pages.report.scholarshipreport',compact('scholarship_applications'));



}
    public function transactionreport(){
        return view('backend.pages.transaction.tlist');

    }
   

    
    public function transactionreport_search (Request $request)
    
    {
//        $request->validate([
//            'from_date'    => 'required|date',
//            'to_date'      => 'required|date|after:from_date',
//        ]);

        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



       $from=$request->from_date;
       $to=$request->to_date;


//       $status=$request->status;

       

   
 
$dot=Donor::whereBetween('created_at', [$from, $to])->get();
return view('backend.pages.transaction.tlist',compact('dot'));



}

}
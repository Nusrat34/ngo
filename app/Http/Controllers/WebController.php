<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home (){
        return view('Frontend.pages.home');
    }

  public function registration (Request $request){

    User::create([

        'name'=>$request->student_name,
        'email'=>$request->student_email,
        'password'=>bcrypt($request->student_password),
        'role'=>'student'
  


      ]);

      notify()->success('registration successfull');

      return redirect()->back();
  }
  
}




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
        'role'=>$request->role,
  


      ]);

      notify()->success('registration successfull');

      return redirect()->back();
  }
  public function login(Request $request)
  {
       $request->validate([
           'email'=>'required|email',
           'password'=>'required',
       ]);

      $credentials=$request->except('_token');
      //  dd($credentials);
      if(auth()->attempt($credentials))
      {
        notify()->success('Login success');
          return redirect()->back();
      }
      else{
        notify()->error('invalid password');
      return redirect()->back();
      }
      // notify()->error('invalid password');
      // return redirect()->back();
  }

  public function logout()
  {
      auth()->logout();
      notify()->success('logout success');
      return redirect()->route('webpage');
  }

  public function home_page(){
    return redirect()->route('webpage');
  }
    
}




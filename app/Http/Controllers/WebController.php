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
    // dd($request->all());

    $request->validate([
      'student_name'=>'required',
      'student_email'=>'required|email',

    ]);
    // dd($request->all());
    $fileName=null;
    if($request->hasFile('file'))
    {
        // generate name
         
        $fileName=date('Ymdhmi').'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('/uploads',$fileName);
    }
    
    User::create([

        'name'=>$request->student_name,
        'email'=>$request->student_email,
        'password'=>bcrypt($request->student_password),
        'role'=>$request->role,
        'gender'=>$request->gender,
        'hscresult'=>$request->hscresult,
        'sscresult'=>$request->sscresult,
        'cgpa'=>$request->cgpa,
        'certificate'=>$fileName,
  


      ]);

      notify()->success('registration successfull');

      return redirect()->back();
  }
  public function login(Request $request)
  {
    // dd($request->all());
      

      $credentials=$request->except('_token');
      // dd($credentials);
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




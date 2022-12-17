<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
  public function profile(){
    return view('Frontend.pages.profile');

  }

    public function updateprofile(Request $request){

        $user=User::find(auth()->user()->id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            
          
            
        ]);
        return redirect()->back();
    }
}

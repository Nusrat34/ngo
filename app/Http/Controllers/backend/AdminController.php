<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function Admin(){
    return view('adminpanel');
 }

    public function dashboard(){
        return view('backend.page.dashboard');
    }
      
    public function contact(){
        return view ('backend.page.contact');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member(){
        return view ('backend.pages.members.member');
    }

    public function memberform(){
        return view('backend.pages.members.memberform');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member()
    {
        $mem = Member::orderBy('id', 'desc')->paginate(8);





        return view('backend.pages.members.member', compact('mem'));
    }

    public function memberform()
    {
        return view('backend.pages.members.memberform');
    }

    public function store(Request $request)
    {

        //        dd($request->all());
        Member::create([
            //database column name => input field name
            'member_name' => $request->member_name,
            'email_name' => $request->email_name,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'address' => $request->address,

        ]);


        return redirect()->back();
    }



    public function memberlist()
    {
        $mem = Member::orderBy('id', 'desc')->paginate(8);

        return view('Frontend.pages.member.memberlist', compact('mem'));
    }

    public function edit($member_id)
    {
        $mem = member::find($member_id);
        return view('backend.pages..edit', compact('mem'));
    }
}

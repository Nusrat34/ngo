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

        $request->validate([
            'member_name'=>'required',
            'email_name'=>'required',
            'password'=>'required',
            'phone_number'=>'required',
            'address'=>'required',

        ]);

        //        dd($request->all());
        Member::create([
            //database column name => input field name
            'member_name' => $request->member_name,
            'email_name' => $request->email_name,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'address' => $request->address,

        ]);

        notify()->success('add success');
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
        return view('backend.pages.members.edit', compact('mem'));
    }
    public function update(Request $request,$member_id){
        $mem = member::find($member_id);
        //        dd($request->all());
        Member::create([
            //database column name => input field name
            'member_name' => $request->member_name,
            'email_name' => $request->email_name,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'address' => $request->address,

        ]);
        notify()->success('update success');

        return redirect()->route('member');

    }
    public function delete($member_id){
        $mem=Member::findOrFail($member_id)->delete();
        return redirect()-> back()->with('message',' deleted');
    }
}

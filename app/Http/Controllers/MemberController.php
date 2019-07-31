<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;

class MemberController extends Controller
{
    public function index()
    {
        $data_member = \App\Member::all();
        return view('member.index', ['data_member' => $data_member]);
    }

    public function create(Request $request)
    {
        // \App\Member::create($request->all());
        $member = new \App\Member;
        $member->type = $request->type;
        $member->username = $request->username;
        $member->fullname = $request->fullname;
        $member->email = $request->email;
        $member->status = 'C';
        $member->password = bcrypt('rahasiadong');
        $member->remember_token = str_random(120);
        $member->created_by = auth()->user()->fullname;
        $member->updated_by = auth()->user()->fullname;
        $request->request->add(['user_id' => $member->id]);
        $member->save();

        return redirect('/member')->with('sukses', 'New users data has been successfully added!');
    }
    public function edit($id)
    {
        $member = \App\Member::find($id);
        return view('member/edit', ['member' => $member]);
    }
    public function update(Request $request, $id)
    {
        $member = \App\Member::find($id);
        $member->update($request->all());
        $member->password = Bcrypt($request->password);
        $member->remember_token = str_random(120);
        $member->updated_by = auth()->user()->fullname;
        $member->save();
        return redirect('/member')->with('sukses', 'Users data has been successfully updated!');
    }
    public function delete($id)
    {
        $member = \App\Member::find($id);
        $member->delete();
        return redirect('/member')->with('sukses', 'Users has been deleted!');
    }
}

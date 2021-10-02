<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class UpdateDataInDBController extends Controller
{
    //
    public function list() {
        $data = Member::all();
        return view('Update Data In DB.list', ['data' => $data]);
    }

    public function showData($id) {
        $data = Member::find($id);
        return view('Update Data In DB.edit', ['data' => $data]);
    }

    public function update(Request $req) {
        $member = Member::find($req->id);
        $member->name=$req->name;
        $member->lname=$req->lname;
        $member->save();
        return redirect('list');
    }

}

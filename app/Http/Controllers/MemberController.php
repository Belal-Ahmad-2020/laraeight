<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function add(Request $req) {
        //  $data = $req->input();   
        $member = new Member;
        $member->name=$req->name;
        $member->lname=$req->lname;
        $member->save();
         $data = $req->input('name');
         $req->session()->flash('name', $data);
         return redirect('add-member');
    }
}

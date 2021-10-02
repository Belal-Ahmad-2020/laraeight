<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function showData(Request $req) {
        $data = $req->input();
        $req->session()->put('username', $data['username']);
        return view('session.profile');
    }
}

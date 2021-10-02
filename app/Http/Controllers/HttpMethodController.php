<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpMethodController extends Controller
{
    //
    public function http_req(Request $req) {
        return $req->input();
    }
}

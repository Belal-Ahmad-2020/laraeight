<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function loadView() {
        return view('test', ['users'=>['Ahmad', 'Mahmood', 'Nabil']]);
    }

    public function getData() {
        return "Data from controller";
    }

}

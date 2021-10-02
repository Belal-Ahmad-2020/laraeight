<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //Template Engine 
    function loadView() {
        return view('blade', ['user'=>['belal','milad','maryam','deba','maso']]);
    }

    // form 
    function getFormData(Request $request) {
        // return "form data here...";
        // return $request->input();
        // dd($request->all());

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        
    }


}

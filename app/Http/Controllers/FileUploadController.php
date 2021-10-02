<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //

    public function uploadFile(Request $req) {
        // return "helo from controller";
        return $req->file('image')->store('docs');
        //$req->file('image')->store('userImage');
    }
}

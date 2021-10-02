<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class SaveDataInDBController extends Controller
{
    //
    public function saveData(Request $req) {
        $bilal = new Bilal;
        $bilal->name=$req->name;
        $bilal->fname=$req->fname;
        $bilal->lname=$req->lname;
        $bilal->save();
        return view('Save Data In DB/save');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class MutatorController extends Controller
{
    //
    
    public function index() {
        $bilal = new Bilal;
        $bilal->name = "Ahmad";
        $bilal->fname = "Whab Khan";
        $bilal->lname = "Wahabi";
        $bilal->save();
        
    }
}

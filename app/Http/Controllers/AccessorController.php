<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class AccessorController extends Controller
{
    //
    public function index() {
        return Bilal::all();
    }
}

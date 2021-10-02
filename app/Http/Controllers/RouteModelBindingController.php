<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class RouteModelBindingController extends Controller
{
    //
    public function index(Bilal $key) {
        return $key;
    }
}

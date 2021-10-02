<?php

namespace App\Http\Controllers;

use App\Models\BilalPost;
use Illuminate\Http\Request;

class BilalPostController extends Controller
{
    //
    public function showPosts() {
        return BilalPost::all();
    }
}

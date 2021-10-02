<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class FetchDataFromDbController extends Controller
{
    //
    public function showData() {
        $data = Bilal::all();
        return view('Fetch Data From DB.list', ['data'=>$data]);
    }


}

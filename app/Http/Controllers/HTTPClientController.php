<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\HTTP;

class HTTPClientController extends Controller
{
    // to get data from api in json format

    public function getApiData() {
        $api_data = HTTP::get('api_url');
        return view('view_name', ['data' => $api_data['data']]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class paginationController extends Controller
{
    //
    public function showData() {
        $pag = Bilal::paginate(3);
        return view('Pagination.pagination', ['pag'=>$pag]);
    }
}

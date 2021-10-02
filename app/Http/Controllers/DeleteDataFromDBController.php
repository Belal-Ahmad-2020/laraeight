<?php

namespace App\Http\Controllers;

use App\Models\Bilal;
use Illuminate\Http\Request;

class DeleteDataFromDBController extends Controller
{

    public function list() {        
        $data=Bilal::all();        
        return view('Delete Data From DB/delete', ['data'=>$data]);
    }

    public function delete($id) {
        $del = Bilal::find($id);
        $del->delete();
        return redirect('list')->with('msg', "Data Deleted Successfully!");
    }

    public function showData($id) {
        $data =  Bilal::find($id);
        return view('Delete Data From DB/edit', ['data' => $data]);
    }

    public function update(Request $req) {               
        $bilal = Bilal::find($req->id);
        $bilal->name=$req->name;
        $bilal->fname=$req->fname;
        $bilal->lname->$req->lname;
        $bilal->save();
        return redirect('list')->with('msg', "Data Updated Successfully");
    }

}

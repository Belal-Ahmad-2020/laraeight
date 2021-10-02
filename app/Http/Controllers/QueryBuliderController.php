<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QueryBuliderController extends Controller
{
    //

    public function dbOperations() {
        // $data =  DB::table('members')->get(); 
        
        // $data =  DB::table('members')
        // ->where('id', 2)
        // ->get(); 
        
        //$data =  (array)DB::table('members')->find(6);
        // return view('QueryBulider.list', ['data' => $data]);

        // return  DB::table('members')->count();
        
        //Insert
        // return DB::table('members')->insert(
        //     [
        //         'name' => 'test',
        //         'lname' => 'test2',
        //     ]
        // );
        

        // Update
        // return DB::table('members')->where('id', 4)->update(
        //     [
        //         'name' => 'Mohamd',
        //         'lname' => 'Omar',
        //     ]
        // );
        

        // delete
         return DB::table('members')->where('id', 4)->delete();

    }
}

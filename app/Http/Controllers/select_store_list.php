<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class select_store_list extends Controller
{
    //
    public function function1(){
        // $data = DB::table('test')->get();
        // dd($data);
        // $data = DB::select('select * from test where number = :num' , ['num'=>1]); 
        $data = DB::select('select * from test where name = :name' , ['name'=>'birwin']); 
        dd($data);
    }
    
    public function index()
    {
        $users = DB::select('select * from test');

        return view('welcome', ['users' => $users]);
        
    }

    public function test()
    {
        $res = DB::select('select * from test where name = :name', ['name'=>'birwin']);
        // $users = DB::select('select * from test');
        return view('test', ['res' => $res]);
    }

    public function zodemo()
    {
        $res = DB::select('select * from test where name = :name', ['name'=>'birwin']);
        // $users = DB::select('select * from test');
        return view('zodemo', ['res' => $res]);
    }
    
    
}

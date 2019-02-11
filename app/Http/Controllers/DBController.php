<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class DBController extends Controller
{
    public function index(Request $request){
        $items = DB::select('select * from people');
        return view('db.index', ['items' => $items]);
    }

    public function post(Request $request){
        return view('db.index', ['msg'=>$request->msg]);
    }
}

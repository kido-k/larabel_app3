<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendController extends Controller
{
    public function index(Request $request){
        return view('extend.index',[
            'message'=>'Hello!',
            'data'=>$request->data
        ]);
    }
}

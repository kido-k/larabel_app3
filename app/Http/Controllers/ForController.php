<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForController extends Controller
{
    public function index(){
        $data = ['one','two','three','four'];
        return view('for.index',['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendController extends Controller
{
    public function index(){
        return view('extend.index',['message'=>'Hello!']);
    }
}

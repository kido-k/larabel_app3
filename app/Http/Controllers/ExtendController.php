<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendController extends Controller
{
    public function index(){
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@suzuki']
        ];
        return view('extend.index',['data'=>$data]);
    }
}

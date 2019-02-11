<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;
// ** third
use Validator;

class ValidateController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
        }
        return view('validate.index', ['msg' => $msg]);
    }

    public function post(ValidateRequest $request)
    {
        // ** first
        // $validate_rule=[
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150',
        // ];
        // $this->validate($request, $validate_rule);
        // return view('validate.index',['msg'=>'正しく入力されました！']);

        // ** second
        // return view('validate.index',['msg'=>'正しく入力されました！']);

        // ** third
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150',
        // ]);
        // if($validator->fails()){
        //     return redirect('/validate')
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        // return view('validate.index',['msg'=>'正しく入力されました！']);

        // ** forth
        // $rules = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric',
        // ];
        // $messages = [
        //     'name.required' => '名前は必ず入力してください。',
        //     'mail.email' => 'メールアドレスが必要です。',
        //     'age.numeric' => '年齢を整数で入力してください。',
        //     'age.min' => '年齢はゼロ歳以上で入力してください。',
        //     'age.ma' => '年齢は200歳以下で入力してください。',
        // ];

        // $validator = Validator::make(
        //     $request->all(),
        //     $rules,
        //     $messages
        // );

        // $validator -> sometimes('age', 'min:0', function($input){
        //     return !is_int($input->age);
        // });
        // $validator -> sometimes('age', 'max:200', function($input){
        //     return !is_int($input->age);
        // });

        // if($validator->fails()){
        //     return redirect('/validate')
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        // return view('validate.index', ['msg' => '正しく入力されました！']);

        // **five
        return view('validate.index', ['msg' => '正しく入力されました！']);
    }
}

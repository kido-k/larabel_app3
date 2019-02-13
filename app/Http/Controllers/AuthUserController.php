<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')
            ->simplePaginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('authuser.index', $param);
    }

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください。'];
        return view('authuser.index', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしてください。（' . Auth::user()->name . '）';
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('authuser.index', ['message' => $msg]);
    }
}

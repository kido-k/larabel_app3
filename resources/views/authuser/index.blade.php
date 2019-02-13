@extends('layouts.pageapp')

@section('title','ユーザー認証')

@section('menubar')
@parent
ユーザー認証
@endsection

@section('content')
<p>{{$message}}</p>
<table>
    <form action="/authuser" method="POST">
        {{ csrf_field() }}
        <tr>
            <th>mail: </th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>pass: </th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
{{--
@if(Auth::check())
<p>User: {{$user->name.' ('.$user->email.')'}}</p>
<a href="/home">home</a>
@else
<p>※ログインしていません。（
    <a href="/login">ログイン</a>｜
    <a href="/register">登録</a>
    ）</p>
@endif
<table>
    <tr>
        <th><a href="/page?sort=name">Name</a></th>
        <th><a href="/page?sort=mail">Mail</a></th>
        <th><a href="/page?sort=age">Age</a></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
</table>
{{$items->appends(['sort'=>$sort])->links()}} --}}
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

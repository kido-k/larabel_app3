@extends('layouts.sessionapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>{{$session_data}}</p>
<table>
    <form action="/session" method="post">
        {{csrf_field()}}
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

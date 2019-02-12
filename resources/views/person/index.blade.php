@extends('layouts.personapp')

@section('title','Person')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
    {{-- first --}}
    {{-- <tr>
        <th>name: </th>
        <th>mail: </th>
        <th>age: </th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach --}}

    {{-- second --}}
    <tr>
        <th>Data:</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

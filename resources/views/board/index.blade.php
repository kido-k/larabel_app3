@extends('layouts.boardapp')

@section('title','Board')

@section('menubar')
@parent
ボードページ
@endsection

@section('content')
{{-- <table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table> --}}
<table>
        <tr>
            <th>Message</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->message}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

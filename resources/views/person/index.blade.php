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
    {{-- <tr>
        <th>Data:</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach --}}

    {{-- third --}}
    <tr>
        <th>Person</th>
        <th>Board</th>
    </tr>
    @foreach ($hasItems as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td>
            <table width="100%">
                @foreach ($item->boards as $obj)
                <tr>
                    <td>{{$obj->getData()}}</td>
                </tr>
                @endforeach
            </table>
        </td>
    </tr>
    @endforeach
    <table>
        <div style="margin:10px">
            <table>
                <tr>
                    <th>Person</th>
                </tr>
                @foreach($noItems as $item)
                <tr>
                    <td>{{$item->getData()}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </table>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

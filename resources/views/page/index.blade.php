@extends('layouts.pageapp')
<style>
    .pagination {
        font-size: 14px
    }
    .pagination li {
        display: inline-block
    }
    tr th a:link {
        color: white;
    }
    tr th a:visited {
        color: white;
    }
    tr th a:hover {
        color: white;
    }
    tr th a:active {
        color: white;
    }
</style>
@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
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
{{$items->appends(['sort'=>$sort])->links()}}
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

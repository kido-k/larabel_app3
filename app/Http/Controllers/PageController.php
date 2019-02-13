<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        // $items = DB::table('people')
        // ->orderBy('age','asc')
        // ->simplePaginate(5);

        $items = Person::orderBy($sort, 'asc')
            ->simplePaginate(5);

        $param = ['items' => $items, 'sort' => $sort];
        return view('page.index', $param);
    }
}

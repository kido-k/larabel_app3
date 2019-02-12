<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class DBController extends Controller
{
    public function index(Request $request)
    {
        // first
        // $items = DB::select('select * from people');
        // return view('db.index', ['items' => $items]);

        // second
        // if (isset($request->id)) {
        //     $param = ['id' => $request->id];
        //     $items = DB::select('select * from people where id = :id', $param);
        // } else {
        //     $items=DB::select('select * from people');
        // }
        // return view('db.index', ['items' => $items]);

        // third
        // $items = DB::table('people')->get();
        // return view('db.index', ['items' => $items]);

        // forth
        $items = DB::table('people')->orderBy('id', 'asc')->get();
        return view('db.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('db.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('db.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        // first
        // DB::insert('insert into people (name, mail, age) values(:name, :mail, :age)', $param);

        // second
        DB::table('people')
            ->insert($param);

        return redirect('/db');
    }

    public function edit(Request $request)
    {
        // first
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('db.edit', ['form' => $item[0]]);

        $item =DB::table('people')
        ->where('id', $request->id)
        ->first();

        return view('db.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        // first
        // $param = [
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'mail' => $request->mail,
        //     'age' => $request->age,
        // ];
        // DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);

        // second
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        $item =DB::table('people')
        ->where('id', $request->id)
        ->update($param);

        return redirect('/db');
    }

    public function del(Request $request)
    {
        // first
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('db.edit', ['form' => $item[0]]);

        // second
        $item =DB::table('people')
        ->where('id', $request->id)
        ->first();
        return view('db.edit', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        // $param = ['id' => $request->id];
        // $item = DB::delete('delete from people where id = :id', $param);

        $item =DB::table('people')
        ->where('id', $request->id)
        ->delete();

        return redirect('/db');
    }

    public function show(Request $request)
    {
        // first
        // $id = $request->id;
        // $items = DB::table('people')->where('id', '<=', $id)->get();
        // return view('db.show', ['items' => $items]);

        // second
        // $name = $request->name;
        // $items = DB::table('people')
        // ->where('name', 'like', '%'.$name.'%')
        // ->orWhere('mail', 'like', '%'.$name.'%')
        // ->get();
        // return view('db.show', ['items' => $items]);

        // third
        // $min = $request->min;
        // $max = $request->max;
        // $items = DB::table('people')
        // ->whereRaw('age >= ? and age <= ?', [$min, $max])->get();
        // return view('db.show', ['items' => $items]);

        // fourth
        $page = $request->page;
        $items = DB::table('people')
            ->offset($page * 3)
            ->limit(3)
            ->get();
        return view('db.show', ['items' => $items]);
    }
}

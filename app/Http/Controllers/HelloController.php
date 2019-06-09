<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('people')
            ->offset($page * 3)
            ->limit(3)
            ->get();
        return view('hello.show', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('SELECT * FROM people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $params = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($params);

        return redirect('/hello');
    }

    public function edit(Request $request)
    {

        $item = DB::table('people')->where('id', $request->id)->first();

        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $params = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')
            ->where('id', $request->id)
            ->update($params);

        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $param = [
            'id' => $request->id,
        ];

        $item = DB::select('SELECT * FROM people WHERE id = :id', $param);

        return view('hello.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = [
            'id' => $request->id,
        ];

        DB::delete('DELETE FROM people WHERE id = :id', $param);

        return redirect('/hello');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('SELECT * FROM people');
        return view('hello.index', ['items' => $items]);
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

        DB::insert('INSERT INTO people (name, mail, age) VALUES (:name, :mail, :age)', $params);

        return redirect('/hello');
    }
}

<?php

namespace App\Http\Controllers;

use App\Restdata;
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

        $item = DB::table('people')->where('id', $request->id)->first();

        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        $param = [
            'id' => $request->id,
        ];

        DB::table('people')->where('id', $request->id)->delete();

        return redirect('/hello');
    }

    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function getSession(Request $request)
    {
        $sesData = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesData]);
    }

    public function setSession(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}

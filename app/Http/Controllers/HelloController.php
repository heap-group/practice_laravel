<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('SELECT * FROM people');

        return view('hello.index', ['items' => $items]);
    }

//    public function post(Request $request)
//    {
//        $rules = [
//            'msg' => 'required',
//        ];
//
//        $this->validate($request, $rules);
//        $msg = $request->msg;
//        $response = new Response(view('hello.index', ['msg' => 'cookie '. $msg]));
//        $response->cookie('msg', $msg, 100);
//        return $response;
//    }
}

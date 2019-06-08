<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie '. $request->cookie('msg');
        } else {
            $msg = 'cookieはありません';
        }

        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $rules = [
            'msg' => 'required',
        ];

        $this->validate($request, $rules);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg' => 'cookie '. $msg]));
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'やまだ', 'mail' => 'yyy@xxx.com'],
            ['name' => 'たなか', 'mail' => 'yyy@xxx.com'],
            ['name' => 'すずき', 'mail' => 'yyy@xxx.com'],
        ];
        return view('hello.index', ['data' => $data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }
}

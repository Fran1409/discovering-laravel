<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocktailsController extends Controller
{
    public function show()
    {
        return view('cocktails');
    }

    public function store()
    {
        die('hello');
    }
}

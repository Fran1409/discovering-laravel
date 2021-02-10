<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocktailsController extends Controller
{
    public function show()
    {
        return view('cocktails');
    }

    public function store(Request $request)
    {
        //dump(request()->all());

        request()->validate([
            'email' => 'required',
            'street' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'cocktails' => 'required'

        ]);

        $email = request('email');
        $adress = request('street');
        $zipcode = request('zipcode');
        $city = request('city');
        $products = request('cocktails;');
    
        return redirect('/orderConfirmation');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Cocktail;

class CocktailsController extends Controller
{
    public function show()
    {
        return view('cocktails');
    }

    public function store(Request $request)
    {
        //dump(request()->all());
        $email = request('email');
        $adress = request('street');
        $zipcode = request('zipcode');
        $city = request('city');
        $products = request('cocktails;');
    }

    public function insertDB(Request $request)
    {
        request()->validate([
            'email' => 'required|email:rfc,dns',
            'street' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'cocktails' => 'required'

        ]);

        //DB::table('cocktails')->insert([
        Cocktail::create([
            'email' => $request->email,
            'street' => $request->street,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'cocktails' => $request->cocktails,
        ]);

        return redirect('/orderConfirmation');
    
    }
}

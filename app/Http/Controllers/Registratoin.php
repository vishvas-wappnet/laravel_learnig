<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registratoin extends Controller
{
    public function index()
        {
            return view('form');
        }

    public function user_register(Request $request)
        {
                echo "<pre>";
                print_r($request->all());
        }    
}

 

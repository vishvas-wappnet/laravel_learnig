<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;



use Illuminate\Validation\Rule; 

class Registratoin extends Controller
{
    public function index()
        {
            return view('form');
        }

    public function user_register(Request $request)
        {
                $request->validate( 
                    [
                        'user_name' => 'required' , 
                        'user_email' => 'required|email',
                        'user_password'=> 'required' 
                    ]
                );

                echo "<pre>";
                print_r($request->all());
        }    
}

 

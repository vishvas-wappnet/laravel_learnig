<?php

namespace App\Http\Controllers;

use  App\Http\Controllers\demoController; 

use Illuminate\Http\Request;

class demoController extends Controller
{
    //

     public function index()
    {
        # code...

        return view('welcome1');
    }
}

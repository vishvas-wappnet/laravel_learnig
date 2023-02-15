<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\resources\about;


class Single_demo_Controller1 extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)   //: Response    .. 
    {
        //
        return view('about');
    }
}

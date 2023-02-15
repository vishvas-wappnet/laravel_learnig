<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



 Route::get('/new', function () 
 {   
    echo "hello wordl";
    // return view('greeting', ['name' => 'James']);
 });


 Route::get('/name/{name}', function($name)
        {
            echo "name is:" . $name;
        }
);

 Route::any('/demo', function()
    {
        echo "TESTING DEOM";
    }
);


Route::get('/wel' , function()
{
    return view('welcome1');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController; 

use App\Http\Controllers\Single_demo_Controller1;

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


 Route::get('/name/{name}/{id?}', function($name ,$id = null)
        {

            $data = compact ('name' ,'id');
            print_r($data);
            echo "<br>";
            echo "name is:" . $name . "<br>";
            echo "id:" . $id;
            return view('dispay_data')->with($data);
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


// Route::get('/data', function()
//     {}
// );

//calling controller
Route::get('/controller' ,[demoController::class , 'index']);
Route::get('/us', Single_demo_Controller1::class); //single controller
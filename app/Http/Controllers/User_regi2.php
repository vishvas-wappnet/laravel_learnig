<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User_regi_model;


class User_regi2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index() //: Response
    // {
    //     return view('user_regi');
    // }



    // public function index()
    //     {
    //         return view('user_regi');
    //     }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //: RedirectResponse
    {
         echo "<pre>";
         print_r($request->all());

         $user_regi2 = new User_regi2;
         $user_regi2->name = $request['name'];
         $user_regi2->email = $request['email'];
         $user_regi2->phone_number = $request['phone_number'];
         $user_regi2->address = $request['address'];
         $user_regi2->save();
         

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //: RedirectResponse
    {
        //
    }
}

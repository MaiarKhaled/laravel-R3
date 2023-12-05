<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // public function show(){
    //     return 'Welcome to my first controller';
    // } 

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Your email is: ' . $email . ' and your password is: ' . $password;
    } 
}

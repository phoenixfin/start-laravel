<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }
    public function welcome_post(Request $request){
        // dd($request->all());
        $name = $request['first_name'].' '.$request['last_name'];
        return view('greeting')->with('name', $name);
    }
}

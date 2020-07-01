<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
        return view('form');
    }
    public function welcome_post(Request $request){
        dd($request->all());
        return view('greeting');
    }
}

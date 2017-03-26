<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        $hello="Hello world!!";
        return view('mainpage',['hello'=>$hello]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example extends Controller
{
    function test ($slug)
    {
        return view('merhaba',['id'=>$slug]);
    }
}

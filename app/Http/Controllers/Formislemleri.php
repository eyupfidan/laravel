<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formislemleri extends Controller
{
    public function gorunum ()
    {
        return view('form');
    }

    public function sonuc(Request $request)
    {
        return 'geldi geldi' . $request->metin;
    }
}

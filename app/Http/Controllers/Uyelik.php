<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uyelik extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
           "adsoyad" =>"required|min:3|max:50",
           "telefon" =>"required|min:10|max:12",
           "mail" =>"email:rfc,dns",
        ]);
        echo 'Validation Success!';
    }
}

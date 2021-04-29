<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactmodel;

class Contact extends Controller
{
    public function up()
    {
        return view('contact');
    }

    public function con_insert(Request $request)
    {
        $adsoyad = $request->adsoyad;
        $telefon = $request->telefon;
        $mail = $request->mail;
        $metin = $request->metin;
        echo $adsoyad . $telefon . $mail . $metin;
        ContactModel::create([
            "adsoyad"=>$adsoyad,
            "telefon"=>$telefon,
            "mail"=>$mail,
            "metin"=>$metin,
        ]);

    }
}

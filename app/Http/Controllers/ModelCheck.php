<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class ModelCheck extends Controller
{

    public function list()
    {
        $data = Info::wheretextarea('Merhaba')->get();

        foreach ($data as $item)
        {
            echo $item->textarea . "<br>";
        }
    }

    public function _insert()
    {
        Info::create([
           "textarea" => "Model için deneme metin",
        ]);
    }

    public function _update()
    {
        Info::wheretextarea("Merhaba")->update([
            "textarea" => "Naber",
        ]);
    }

    public function _delete()
    {
        Info::wheretextarea("Lorem ipsum lodor sit amet")->delete();
    }

}

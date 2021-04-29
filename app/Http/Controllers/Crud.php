<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Crud extends Controller
{
    public function insert()
    {
        DB::table('info')->insert([
            "textarea" => "Lorem ipsum lodor sit amet",
        ]);
            echo 'ok';

    }

    public function update()
    {
        DB::table('info')->where("id",1)->update([
           "textarea" => "Metin alanı güncellenmiştir.",
        ]);
    }

    public function delete()
    {
        DB::table('info')->where("id",1)->delete();
    }

    public function view()
    {
        /*$data = DB::table('info')->get();
        foreach ($data as $value)
        {
            echo $value->id .' ' .$value->textarea . "<br>";
        }*/

        $data = DB::table('info')->where("id",25)->first();
        echo $data->textarea;
    }
}

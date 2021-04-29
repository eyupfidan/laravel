<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImage extends Controller
{
    public function upload_image(Request $request)
    {
        $resim = $request->dosya;

        //echo $resim->getClientOriginalName();
        $random_name = rand(0,10000).".".$resim->getClientOriginalExtension();
        echo $random_name . " Uploaded " . public_path('files');
        $resim->move(public_path('files'),$random_name);
    }
}

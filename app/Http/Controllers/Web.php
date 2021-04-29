<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    public function site()
    {
        $data['title'] = 'Php Laravel Dersleri';
        $data['content'] = 'Tema entegre dersine hoşgeldiniz.';
        $data['down_content'] = 'Laravel derslerine neden gelmediniz?';
        return view('web',$data);
    }
}

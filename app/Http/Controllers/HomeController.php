<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view('index');

    }

    public function tentang_kami()
    {

        $page = 'Tentang Kami';
        $data = array(
            'wakaf.png',
            'wakaf_mesjid.png',
            'wakaf_nasional.png',
            'bca.png',
            'bri.png',
            'bni.png'
        );
        
        return view('tentang_kami')->with([
            'page'  =>  $page,
            'data'  =>  $data,
        ]);

    }

}

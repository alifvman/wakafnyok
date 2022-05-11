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
        
        return view('tentang_kami')->with([
            'page'  =>  $page,
        ]);

    }

}

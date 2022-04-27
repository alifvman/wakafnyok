<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakafController extends Controller
{

    public function index()
    {

        return view('wakaf.index');

    }

    public function masjid()
    {

        return view('wakaf.masjid');

    }

    public function nasional()
    {

        return view('wakaf.nasional');

    }

}

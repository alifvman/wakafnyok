<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakafController extends Controller
{

    public function index(Request $request)
    {

        $page = $request->title;

        return view('wakaf.index')->with([
            'img'   => $request->img,
            'text'  => $request->text,
            'alamat'=> $request->alamat,
            'page'  =>  $page,
        ]);

    }

    public function masjid()
    {

        return view('wakaf.masjid');

    }

    public function nasional()
    {

        return view('wakaf.nasional');

    }

    public function payment(Request $request)
    {
return $request->all();
        return view('wakaf.payment')->with([
            'nominal'   => $request->nominal,
            'metode'    => $request->metode,
            'nama'      => $request->nama,
            'email'     => $request->email,
            'no_hp'     => $request->no_hp,
            'doa'       => $request->doa,
        ]);

    }

}

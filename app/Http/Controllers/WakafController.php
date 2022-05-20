<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;

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

        $request->validate([
            'realtotal' => 'required|min:3',
            'metode'    => 'required',
        ]);

        $metode = strtoupper($request->metode);

        $virtual_akun = '';
        $metode_bayar1 = '';
        $metode_bayar2 = '';
        $metode_bayar3 = '';
        $isi_metode1 = array();
        $isi_metode2 = array();
        $isi_metode3 = array();

        if($request->metode == "bca") {
            $virtual_akun   = 'BCA Virtual Account';
            $metode_bayar1  = 'ATM BCA';
            $metode_bayar2  = 'Klik BCA';
            $metode_bayar3  = 'm-BCA';
            $isi_metode1 = array(
                "Pada menu utama, Pilih <strong>Transaksi Lainnya</strong>",
                "Pilih <strong>Transfer</strong>",
                "Pilih Rek <strong>BCA Virtual Account</strong>",
                "Pilih ke Rek <strong>BCA Virtual Account</strong> lalu tekan <strong>Benar</strong>",
                "Masukkan jumlah tagihan yang akan Anda Bayar",
                "Pada halaman Konfirmasi transfer akan muncul detail pembayaran Anda. Jika informasi sudah sesuai tekan <strong>Ya</strong>"
            );
        }elseif($request->metode == "bni") {
            $virtual_akun = 'BNI Virtual Account';
        }elseif($request->metode == "mandiri") {
            $virtual_akun = 'Mandiri Virtual Account';
        }elseif($request->metode == "bsi") {
            $virtual_akun = 'BSI Virtual Account';
        }elseif($request->metode == "bri") {
            $virtual_akun = 'BRI Virtual Account';
        }elseif($request->metode == "gopay") {
            $virtual_akun = 'GoPay';
        }elseif($request->metode == "shope") {
            $virtual_akun = 'ShopeePay';
        }

        $tgl = Carbon::now()->isoFormat('lll');
        $tglakhir = Carbon::now()->addDay();
        $tglakhir = $tglakhir->isoFormat('lll');

        $rand_va = generateRandomNumber(17);

        $rand_idtran = generateRandomAlphabet(7).generateRandomNumber(6);

        $admin = 2000;

        $total = $request->realtotal + $admin;

        $admin = "Rp. " . number_format($admin,0,',','.');
        $total = "Rp. " . number_format($total,0,',','.');
        $nominal = "Rp. " . number_format($request->realtotal,0,',','.');

        return view('wakaf.payment')->with([
            'nominal'       => $nominal,
            'admin'         => $admin,
            'total'         => $total,
            'metode'        => $request->metode,
            'page'          => "Payment Using ".$metode." Method",
            'tgl'           => $tgl,
            'tglakhir'      => $tglakhir,
            'virtual_akun'  => $virtual_akun,
            'metode_bayar1' => $metode_bayar1,
            'metode_bayar2' => $metode_bayar2,
            'metode_bayar3' => $metode_bayar3,
            'isi_metode1'   => $isi_metode1,
            'isi_metode2'   => $isi_metode2,
            'isi_metode3'   => $isi_metode3,
            'rand_va'       => $rand_va,
            'rand_idtran'   => $rand_idtran,
        ]);

    }

}

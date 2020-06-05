<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Anggota;
use App\Acara;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::get();
        $anggota   = Anggota::get();
        $acara      = Acara::get();
        if(Auth::user()->level == 'user')
        {
            $datas = Transaksi::where('status', 'belum')
                                ->where('anggota_id', Auth::user()->anggota->id)
                                ->get();
        } else {
            $datas = Transaksi::where('status', 'belum')->get();
        }
        return view('home', compact('transaksi', 'anggota', 'acara', 'datas'));
    }
}

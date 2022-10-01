<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            return view('pages.pesan', [
                "tiket" => ticket::all(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_ktp' => 'required|max:16',
            'no_hp' => 'required|max:13',
            'kelas' => 'required',
            'jadwal' => 'required',
            'jml_penumpang' => 'required',
            'jml_lansia' => 'required',
        ]);

        $harga = ticket::where("kelas", $request->kelas)->first();
        $validatedData['harga_tiket'] = $harga->harga;
        $validatedData['total_bayar'] = ($request->jml_penumpang * $harga->harga) + ($request->jml_lansia * ($harga->harga * 0.9));

        if ($validatedData['no_ktp'] > 16) {
            return redirect('/pesan')->with('error', "input nomer identitas tidak lebih dari 16!");
        }

        transaction::create($validatedData);


        return redirect('/detail')->with('success', 'Tiket Berhasil Dipesan');
    }

    public function show()
    {
        return view('pages.riwayat', [
            'transaksi' => transaction::latest()->get(),
        ]);
    }

    public function detail()
    {

        return view('pages.detailTransaksi', [
            'detail' => transaction::latest()->get()[0],
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function index()
    {
        //
        {
            return view('pages.daftarHarga', [
                "tiket" => ticket::all(),
            ]);
        }
    }
}

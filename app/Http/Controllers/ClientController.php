<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function home()
    {
        $no = 1;
        $lapangan1 = Transaksi::all()->where('lapangan', 'LIKE', 'Lapangan 1');
        $lapangan2 = Transaksi::all()->where('lapangan', 'LIKE', 'Lapangan 2');
        $lapangan3 = Transaksi::all()->where('lapangan', 'LIKE', 'Lapangan 3');
        return view('client.home', compact('lapangan1', 'lapangan2', 'lapangan3', 'no'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TransaksiController extends Controller
{
    public function read()
    {
        $no = 1;
        $kategori = Transaksi::all();
        return view('admin.transaksi', compact('kategori', 'no'));
    }

    public function resultTransaksi()
    {
        $resultTransaksi = Transaksi::all()->count();
        return view('admin.dashboard', compact('resultTransaksi'));
    }

    public function delete($id)
    {
        DB::table('transaksis')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $kategori      = new Transaksi();
        $kategori->nama = ucwords(strtolower($request->nama));
        $kategori->kontak = $request->kontak;
        $kategori->lapangan = $request->lapangan;
        $kategori->waktu = $request->waktu;
        $kategori->harga = $request->harga;
        $kategori->save();

        return Redirect::to("admin/transaksi")->withSuccess('Berhasil! Data Transaksi Berhasil Diinput.');
    }
}

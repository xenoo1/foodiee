<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pem = Pemesanan::all();
        return view('pemesanan.index', compact('nomor', 'pem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'makanan' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
        ]);

        $pem = new Pemesanan;
        $pem->nama = $request->nama;
        $pem->makanan = $request->makanan;
        $pem->harga = $request->harga;
        $pem->tanggal = $request->tanggal;
        $pem->jumlah = $request->jumlah;
        
        $pem->save();

        return redirect('/pemesanan')->with('success', 'Data pemesanan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pem = Pemesanan::find($id);
        if ($pem) {
            return view('pemesanan.edit', compact('pem'));
        } else {
            return redirect('/pemesanan')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'makanan' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
        ]);

        $pem = Pemesanan::find($id);
        if ($pem) {
            $pem->nama = $request->nama;
            $pem->makanan = $request->makanan;
            $pem->harga = $request->harga;
            $pem->tanggal = $request->tanggal;
            $pem->jumlah = $request->jumlah;
            $pem->save();
            return redirect('/pemesanan')->with('success', 'Data pemesanan berhasil diupdate');
        } else {
            return redirect('/pemesanan')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pem = Pemesanan::find($id);
        if ($pem) {
            $pem->delete();
            return redirect('/pemesanan')->with('success', 'Data pemesanan berhasil dihapus');
        } else {
            return redirect('/pemesanan')->withErrors('Data tidak ditemukan');
        }
    }
}

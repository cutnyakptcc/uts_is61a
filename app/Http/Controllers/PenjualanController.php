<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pen = Penjualan::all();
        return view('penjualan.index', compact('nomor', 'pen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'notrans' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        $pen = new Penjualan;
        $pen->notrans = $request->notrans;
        $pen->merk = $request->merk;
        $pen->jumlah = $request->jumlah; 
        $pen->harga = $request->harga;
        $pen->save();

        return redirect('/penjualan/')->with('success', 'Data penjualan berhasil disimpan');
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
        $pen = Penjualan::find($id);
        if ($pen) {
            return view('penjualan.edit', compact('pen'));
        } else {
            return redirect('/penjualan/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'notrans' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        $pen = Penjualan::find($id);
        if ($pen) {
            $pen->notrans = $request->notrans;
            $pen->merk = $request->merk;
            $pen->jumlah = $request->jumlah; 
            $pen->harga = $request->harga;
            $pen->save();
            return redirect('/penjualan/')->with('success', 'Data penjualan berhasil diupdate');
        } else {
            return redirect('/penjualan/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = Penjualan::find($id);
        if ($pen) {
            $pen->delete();
            return redirect('/penjualan/')->with('success', 'Data penjualan berhasil dihapus');
        } else {
            return redirect('/penjualan/')->withErrors('Data tidak ditemukan');
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    function list()
    {
        $listBarang = Barang::all();
        return view('home', ['listBarang' => $listBarang]);

    
    }
    function form()
    {
        return view('form');

    }
    function processForm(Request $request)
    {
        $request->validate([
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'jenisbarang' => 'required',
            'jumlah' => 'required',
            'hargajual' => 'required',
        ]);

        $barang = Barang::create([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,
            'jenisbarang' => $request->jenisbarang,
            'jumlah' => $request->jumlah,
            'hargajual' => $request->hargajual,
        ]);
        if($barang){
            return redirect()->route('home');
        }
        
    }
    function edit($id)
    {
        $barang = Barang::find($id);
        return view('edit', ['barang' => $barang]);
    }
    function processEdit(Request $request, $id)
    {
        $request->validate([
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'jenisbarang' => 'required',
            'jumlah' => 'required',
            'hargajual' => 'required',
        ]);

        $barang = Barang::find($id);
        $barang = $barang->update([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,
            'jenisbarang' => $request->jenisbarang,
            'jumlah' => $request->jumlah,
            'hargajual' => $request->hargajual,
        ]);

        if($barang){
            return redirect()->route('home');
        }
    }
}


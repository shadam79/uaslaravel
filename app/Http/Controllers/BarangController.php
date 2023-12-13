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
        $barang = Barang::create([
            'nobarang' => $request->nobarang,
            'namabarang' => $request->namabarang,
            'varianbarang' => $request->varianbarang,
            'tanggalkadaluarsa' => $request->tanggalkadaluarsa,
            'tanggalproduksi' => $request->tanggalproduksi,
            'hargabeli' => $request->hargabeli,
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

        $barang = Barang::find($id);
        $barang = $barang->update([
            'nobarang' => $request->nobarang,
            'namabarang' => $request->namabarang,
            'varianbarang' => $request->varianbarang,
            'tanggalkadaluarsa' => $request->tanggalkadaluarsa,
            'tanggalproduksi' => $request->tanggalproduksi,
            'hargabeli' => $request->hargabeli,
        ]);

        if($barang){
            return redirect()->route('home');
        }
    }
    function hapus($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        if($barang){
            return redirect()->route('home');
        }
    }
}


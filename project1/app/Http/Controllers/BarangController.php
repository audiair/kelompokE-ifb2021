<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $data['barangs'] = Barang::all();
        return view('barangs.index', $data);
    }

    public function create(){
        return view('barangs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'kode' => 'required|unique:barangs|max:10',
            'nama_barang' => 'required|max:255',
            'jenis' => 'required|max:150',
            'satuan' => 'required|max:100',
            'harga_satuan' => 'required|numeric',
        ]);

        Barang::create($validated);
        
        if($request->save == true) {
            return redirect()->route('barangs')->with('success', 'DATA BERHASIL DITAMBAH');
        } else {
            return redirect()->route('barang.create');
        }
    }

    public function edit($kode){
        $data['barang'] = Barang::find($kode);
        return view('barangs.edit', $data);
    }

    public function update(Request $request, $kode){
        $barang = Barang::find($kode);

        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
            'jenis' => 'required|max:150',
            'satuan' => 'required|max:100',
            'harga_satuan' => 'required|numeric',
        ]);

        Barang::where('kode', $kode)->update($validated);

        return redirect()->route('barangs')->with('success', 'DATA BERHASIL DIEDIT');
    }

    public function destroy($kode){
        $barang = Barang::find($kode);
        $barang->delete();
        
        return redirect()->route('barangs')->with('success', 'DATA BERHASIL DIHAPUS');
    }
}

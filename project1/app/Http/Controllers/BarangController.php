<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use Auth;

class BarangController extends Controller
{
    public function index(){
        $data['barangs'] = Barang::with('user')->get();
        return view('barangs.index', $data);
    }

    public function create(){
        return view('barangs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'kode' => 'required|unique:barangs|max:10',
            'nama_barang' => 'required|max:255',
            'stok' => 'required|max:255',
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
        $data['users'] = User::pluck('name','id');
        return view('barangs.edit', $data);
    }

    public function update(Request $request, $kode){
        $barang = Barang::find($kode);

        $validated = $request->validate([
            'user_id' => 'required',
            'nama_barang' => 'required|max:255',
            'stok' => 'required|max:255',
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

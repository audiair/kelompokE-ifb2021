<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\StaffGudang;
use App\Models\Cabang;

class BarangMasukController extends Controller
{
    public function index(){
        $data['barang_masuks'] = BarangMasuk::with('barang')->get();
        $data['barang_masuks'] = BarangMasuk::with('cabang')->get();
        $data['barang_masuks'] = BarangMasuk::with('staff_gudang')->get();
        return view('barang_masuks.index', $data);
    }

    public function create(){
        $data['barangs'] = Barang::pluck('nama_barang','kode');
        $data['cabangs'] = Cabang::pluck('nama_cabang','id');
        $data['staff_gudangs'] = StaffGudang::pluck('nama','id');
        return view('barang_masuks.create',$data);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'tgl_masuk' =>'required',
            'cabang_id' =>'required',
            'id_staff_gudang' => 'required',
            'kode_barang' =>'required',
            'jumlah' => 'required|numeric',
            'harga_beli' => 'required|numeric',
        ]);

        BarangMasuk::create($validated);
        
        return redirect()->route('barang_masuks')->with('success','DATA BERHASIL DITAMBAH');
    }

    public function edit($id){
        $data['barang_masuk'] = BarangMasuk::find($id);
        $data['barangs'] = Barang::pluck('nama_barang','kode');
        $data['cabangs'] = Cabang::pluck('nama_cabang','id');
        $data['staff_gudangs'] = StaffGudang::pluck('nama','id');
        return view('barang_masuks.edit', $data);
    }

    public function update(Request $request, $id ){
        $barang_masuk = BarangMasuk::find($id);

        $validated = $request->validate([
            'tgl_masuk' =>'required',
            'cabang_id' =>'required',
            'id_staff_gudang' => 'required',
            'kode_barang' =>'required',
            'jumlah' => 'required|numeric',
            'harga_beli' => 'required|numeric',
        ]);

        BarangMasuk ::where('id', $id)->update($validated);

        return redirect()->route('barang_masuks')->with('success', 'DATA BERHASIL DIEDIT');
    }

    public function destroy($id){
        $barang_masuk = BarangMasuk::find($id);
        $barang_masuk->delete();
        
        return redirect()->route('barang_masuks')->with('success', 'DATA BERHASIL DIHAPUS');
    }

}

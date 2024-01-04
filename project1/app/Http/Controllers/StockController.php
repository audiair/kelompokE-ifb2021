<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Barang;
use App\Models\Cabang;

class StockController extends Controller
{
    public function index(){
        $data['stocks'] = Stock::with('barang','cabang')->get();
        return view('stocks.index', $data);
    }

    public function create(){
        $data['barangs'] = Barang::pluck('nama_barang','kode');
        $data['cabangs'] = Cabang::pluck('nama_cabang','id');
        return view('stocks.create',$data);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'kode_barang' => 'required',
            'stok' => 'required|numeric',
            'cabang_id' => 'required',
        ]);
        
        Stock::create($validated);

        return redirect()->route('stocks')->with('success', 'DATA BERHASIL DITAMBAH');
    }

    public function destroy($id){
        $stock = Stock::find($id);
        $stock->delete();
        
        return redirect()->route('stocks')->with('success', 'DATA BERHASIL DIHAPUS');

    }
}

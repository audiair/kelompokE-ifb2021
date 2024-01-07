<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabang;

class CabangController extends Controller
{
    public function index(){
        $data['cabangs'] = Cabang::all();
        return view('cabangs.index', $data);
    }

    public function create(){
        return view('cabangs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama_cabang' => 'required',
            'kota' => 'required',
        ]);

        Cabang::create($validated);
        
        return redirect()->route('cabangs')->with('success', 'DATA BERHASIL DITAMBAH');
    }

    public function edit($id){
        $data['cabang'] = Cabang::find($id);
        return view('cabangs.edit',$data);
    }

    public function update(Request $request, $id){
        $cabang = Cabang::find($id);

        $validated = $request->validate([
            'nama_cabang' => 'required',
            'kota' => 'required',
        ]);

        Cabang::where('id', $id)->update($validated);

        return redirect()->route('cabangs')->with('success', 'DATA BERHASIL DIEDIT');
    }

    public function destroy($id){
        $cabang = Cabang::find($id);
        $cabang->delete();
        
        return redirect()->route('cabangs')->with('success', 'DATA BERHASIL DIHAPUS');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Cabang;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::all();
        return view('users.index',$data);
    }

    public function create(){
        $data['cabangs'] = Cabang::pluck('nama_cabang','id');
        return view('users.create', $data);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cabang_id' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cabang_id' => $request->cabang_id,
            'role' => $request->role
        ]);
        
        $user->save();
        
        return redirect()->route('users')->with('success', 'DATA BERHASIL DITAMBAH');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('users')->with('success', 'DATA BERHASIL DIHAPUS');
    }
}

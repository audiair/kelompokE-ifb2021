<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiItem;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index(){

    }

    public function create(){
        $barangs = Barang::all();
        return view('transaksis.create', ['barangs' => $barangs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Models\Manajer;

class CabangController extends Controller
{
    public function index(){
        $data['cabangs'] = Cabang::with('manajer')->get();
        return view('cabang.index', $data);
    }
}

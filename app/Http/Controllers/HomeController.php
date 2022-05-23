<?php

namespace App\Http\Controllers;

use App\Models\desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $datas = DB::table('desas')
        ->join('kecamatans','kecamatans.id','=','desas.kecamatan_id')
        ->join('kabupatens','kabupatens.id','=','desas.kabupaten_id')
        ->join('provinsis','provinsis.id','=','desas.provinsi_id')
        ->select("desas.*","kecamatans.kecamatan","kabupatens.kabupaten","provinsis.provinsi")
        ->get();

        return view('welcome', compact('datas'));
    }

}

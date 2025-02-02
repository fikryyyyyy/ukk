<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Depresiasi;
use App\Models\HitungDepresiasi;
use App\Models\Pengadaan;
use Illuminate\Http\Request;

class HitungDepresiasiController extends Controller
{
    // Menampilkan daftar hitung depresiasi
    public function index()
    {
        $depresiasiItems = HitungDepresiasi::with('pengadaan')->get();
        $depresis = Depresiasi::all();

        return view('user.hitung_depresiasi.index', compact('depresiasiItems', 'depresis'));
    }
    public function show($id_pengadaan)
    {
        $pengadaan = Pengadaan::with('hitungDepresiasi')->findOrFail($id_pengadaan);

        return view('user.hitung_depresiasi.detail', compact('pengadaan'));
    }

}

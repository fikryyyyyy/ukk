<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\HitungDepresiasi;
use App\Models\Opname;
use App\Models\Pengadaan;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index()
    {
        // Hitung jumlah data
        $totalOpname = Opname::count();
        $totalPengadaan = Pengadaan::count();
        $totalDepresiasi = HitungDepresiasi::count();
        $pengadaans = Pengadaan::with('depresiasi')->get();
        // Ambil data dari tabel
        $pengadaan = Pengadaan::latest()->limit(10)->get(); // Ambil 10 data terbaru
        $opnames = Opname::latest()->limit(10)->get();
        $depresiasiItems = HitungDepresiasi::latest()->limit(10)->get();

        return view('user.dashboard', compact('totalOpname', 'totalPengadaan', 'totalDepresiasi', 'pengadaan', 'pengadaans','opnames', 'depresiasiItems'));
    }
    public function edit($id)
    {
        $hitungDepresiasi = HitungDepresiasi::findOrFail($id);
        $pengadaan = Pengadaan::with('depresiasi')->get();
        return view('user.hitung_depresiasi.edit', compact('hitungDepresiasi', 'pengadaan'));
    }
}

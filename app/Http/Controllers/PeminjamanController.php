<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function riwayat(Peminjaman $peminjaman)
    {
        return view('components.dashboard', [
            'title' => "Riwayat Peminjaman",
            'data' => $peminjaman->all(),
            'active' => "Peminjaman"
        ]);
    }

    public function pemesanan(Peminjaman $peminjaman)
    {
        return view('components.peminjaman.index', [
            'title' => "Pemesanan",
            'data' => $peminjaman->all(),
            'active' => "Peminjaman"
        ]);
    }
}

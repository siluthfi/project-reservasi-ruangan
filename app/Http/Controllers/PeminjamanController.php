<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Peminjaman $peminjaman)
    {
        return view('components.dashboard', [
            'title' => "Riwayat Peminjaman",
            'data' => $peminjaman->all()
        ]);
    }
}

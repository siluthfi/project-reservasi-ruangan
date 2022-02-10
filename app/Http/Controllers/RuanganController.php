<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function ruang()
    {
        return view('components.ruangan.ruang', [
            'title' => "Tabel Ruangan",
            'active' => "Ruangan",
        ]);
    }
    
    public function detail()
    {
        return view('components.ruangan.detail', [
            'title' => "Detail Ruangan",
            'active' => "Ruangan",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request-> validate([
            'nama_ruang' => 'required|max:255',
            'status' => 'required',
            'kode_ruang' => 'required|unique:ruangan',
            'deskripsi' => 'required'            
        ]);

        $validateData;

        return redirect('/ruangan');
    }

}

<?php

namespace App\Http\Controllers\pasien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;

class PasienC extends Controller
{
    // Tampilkan halaman tabel pasien
    public function index()
    {

        // Ambil semua data atau paginate
        $pasiens = Pasien::all(); // atau Pasien::paginate(10);
        
        return view('backend.pages.people.pasien.table', compact('pasiens'));
    }

    // Tampilkan halaman form tambah pasien
    public function create()
    {
        return view('backend.pages.people.pasien.form');
    }

    // Simpan data pasien (jika kamu akan pakai)
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'sex'       => 'required|in:male,female,other',
            'address'   => 'required|string|max:255',
        ]);

        // Ini yang nyimpen ke database
        Pasien::create($data);

        return redirect()->route('pasien.table')->with('success', 'Pasien berhasil disimpan!');
    }
}

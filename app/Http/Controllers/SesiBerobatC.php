<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\SesiBerobat;
use Illuminate\Http\Request;

class SesiBerobatC extends Controller
{
    public function create()
    {
        $pasien = Pasien::orderBy('full_name')->get();
        return view('backend.pages.sesi_berobat.create', compact('pasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'tanggal'   => 'required|date',
            'keluhan'   => 'nullable|string|max:255'
        ]);

        SesiBerobat::create($request->all());

        return redirect()->back()->with('success', 'Sesi berobat berhasil disimpan.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\NilaiAlternatif;
use App\Models\Obat;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Mengambil semua data obat dan kriteria.
     * Lalu menampilkan halaman input nilai dengan form dinamis
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        $obats = Obat::all();
        return view('layouts.admin.penilaian.index', compact('kriteria', 'obats'));
    }

    /**
     * Memproses input nilai dari form.
     */
    public function store(Request $request)
    {
        foreach ($request->nilai as $obat_id => $kriterias) {
            foreach ($kriterias as $kriteria_id => $nilai) {
                NilaiAlternatif::updateOrCreate(
                    ['obat_id' => $obat_id, 'kriteria_id' => $kriteria_id],
                    ['nilai' => $nilai]
                );
            }
        }

        return redirect()->route('admin.penilaian.index')->with('success', 'Data penilaian berhasil disimpan.');
    }
}

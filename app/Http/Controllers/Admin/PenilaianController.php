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
        foreach ($request->nilai as $obat_id => $nilai_kriteria) {
            foreach ($nilai_kriteria as $kriteria_id => $nilai) {
                NilaiAlternatif::updateOrCreate( // Melakukan update nilai ke tabel nilai alternatif
                    ['obat_id' => $obat_id, 'kriteria_id' => $kriteria_id],
                    ['nilai' => $nilai]
                );
            }
        }
        return redirect()->route('layouts.admin.penilaian.index');
    }
}

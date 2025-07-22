<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\NilaiAlternatif;
use App\Models\Obat;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        $obats = Obat::with('nilai')->get();

        $normalisasi = [];
        $nilaiAwal = [];
        $skor = [];

        // Mengambil nilai awal
        foreach ($obats as $obat) {
            foreach ($kriteria as $k) {
                $nilai = optional($obat->nilai->where('kriteria_id', $k->id)->first())->nilai ?? 0;
                $nilaiAwal[$obat->id][$k->id] = $nilai;
            }
        }

        // Normalisasi berdasarkan tipe kriteria
        foreach ($kriteria as $k) {
            $nilai_kriteria = \App\Models\NilaiAlternatif::where('kriteria_id', $k->id)->pluck('nilai');
            $max = $nilai_kriteria->max();
            $min = $nilai_kriteria->min();

            foreach ($obats as $obat) {
                $nilai = $nilaiAwal[$obat->id][$k->id] ?? 0;
                $normal = 0;

                // Menghindari pembagian 0
                if ($nilai != 0) {
                    $normal = ($k->tipe === 'benefit') ? $nilai / $max : $min / $nilai;
                }

                $normalisasi[$obat->id][$k->id] = $normal;
            }
        }

        // Menghitung skor akhir
        foreach ($obats as $obat) {
            $total = 0;
            foreach ($kriteria as $k) {
                $normal = $normalisasi[$obat->id][$k->id] ?? 0;
                $total += $normal * $k->bobot;
            }

            $skor[] = [
                'nama_obat' => $obat->nama_obat,
                'skor' => $total
            ];
        }

        $hasil = collect($skor)->sortByDesc('skor')->values();

        return view('layouts.admin.hasil.index', compact('hasil', 'obats', 'kriteria', 'nilaiAwal', 'normalisasi'));
    }
}

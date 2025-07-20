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
        $kriteria = Kriteria::all(); // mengambil semua data kriteria
        $obats = Obat::with('nilai')->get(); // mengambil semua data obat termasuk relasi nilai (nilai setiap kriteria untuk obat tertentu)

        $normalisasi = [];
        $skor = [];

        foreach ($kriteria as $k) {
            $nilai_kriteria = NilaiAlternatif::where('kriteria_id', $k->id)->pluck('nilai'); // normalisasi nilai untuk setiap kriteria
            $max = $nilai_kriteria->max();
            $min = $nilai_kriteria->min();

            foreach ($obats as $obat) {
                $nilai = optional($obat->nilai->where('kriteria_id', $k->id)->first())->nilai ?? 0;
                if ($k->tipe === 'benefit') { // melakukan perhitungan normalisasi untuk setiap obat
                    $normal = ($max != 0) ? $nilai / $max : 0;
                } else {
                    $normal = ($nilai != 0) ? $min / $nilai : 0;
                }
                $normalisasi[$obat->id][$k->id] = $normal;
            }
        }

        foreach ($obats as $obat) {
            $total = 0;
            foreach ($kriteria as $k) {
                $total += ($normalisasi[$obat->id][$k->id] ?? 0) * $k->bobot; // menjumlahkan hasil normalisasi dikali bobot untuk setiap obat
            }
            $skor[] = ['nama_obat' => $obat->nama_obat, 'skor' => $total]; // baris ini untuk penyimpanan hasil akhir perhitungan
        }

        $hasil = collect($skor)->sortByDesc('skor')->values(); // mengurutkan atau perangkingan sebagai rekomendasi obat terbaik
        return view('layouts.admin.hasil.index', compact('hasil'));
    }
}

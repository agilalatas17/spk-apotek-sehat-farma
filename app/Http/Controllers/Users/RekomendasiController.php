<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Obat;
use App\Models\NilaiAlternatif;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    // public function index(Request $request)
    // {
    //     $query = Obat::query();

    //     if ($request->filled('rasa')) {
    //         $query->where('rasa_obat', 'LIKE', "%{$request->rasa}%");
    //     }

    //     if ($request->filled('efek_samping')) {
    //         $query->where('efek_samping', 'LIKE', "%{$request->efek_samping}%");
    //     }

    //     if ($request->filled('bentuk')) {
    //         $query->where('bentuk_obat', 'LIKE', "%{$request->bentuk}%");
    //     }

    //     if ($request->filled('harga')) {
    //         if ($request->harga === 'murah') {
    //             $query->where('harga_obat', '<=', 20000);
    //         } elseif ($request->harga === 'sedang') {
    //             $query->whereBetween('harga_obat', [20001, 50000]);
    //         } else {
    //             $query->where('harga_obat', '>', 50000);
    //         }
    //     }

    //     $obats = $query->get();

    //     return view('landing.rekomendasi', compact('obats'));
    // }



    // public function index()
    // {
    //     $preferensi = session('preferensi');

    //     if (!$preferensi) {
    //         return redirect()->route('user.preferensi.index')->with('error', 'Silahkan isi preferensi terlebih dahulu');
    //     }

    //     $query = Obat::query();

    //     $query->where('rasa_obat', 'LIKE', "%{$preferensi['rasa']}%")
    //         ->where('efek_samping', 'LIKE', "%{$preferensi['efek_samping']}%")
    //         ->where('bentuk_obat', 'LIKE', "%{$preferensi['bentuk']}%");


    //     if ($preferensi['harga_obat'] === 'murah') {
    //         $query->where('harga_obat', '<=', 20000);
    //     } elseif ($preferensi['harga_obat'] === 'sedang') {
    //         $query->whereBetween('harga_obat', [20001, 50000]);
    //     } else {
    //         $query->where('harga_obat', '>', 50000);
    //     }

    //     $rekomendasi = $query->get();

    //     return view('landing.rekomendasi', compact('rekomendasi', 'preferensi'));
    // }
}

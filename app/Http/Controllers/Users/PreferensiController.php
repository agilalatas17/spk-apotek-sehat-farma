<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Obat;
use App\Models\NilaiAlternatif;
use Illuminate\Http\Request;

class PreferensiController extends Controller
{
    public function index(Request $request)
    {
        $hasil = collect();

        if ($request->isMethod('post')) {

            $rasa = $request->rasa_obat;
            $efek = $request->efek_samping;
            $harga = $request->harga_obat;
            $bentuk = $request->bentuk_obat;

            $query = Obat::query();

            if ($rasa) {
                $query->where('rasa_obat', 'LIKE', "%$rasa%");
            }
            if ($efek) {
                $query->where('efek_samping', 'LIKE', "%$efek%");
            }
            if ($harga) {
                $query->where('harga_obat', '<=', $harga);
            }
            if ($bentuk) {
                $query->where('bentuk_obat', 'LIKE', "%$bentuk%");
            }

            $hasil = $query->get();
        }

        return view('landing.preferensi', compact('hasil'));
    }
}

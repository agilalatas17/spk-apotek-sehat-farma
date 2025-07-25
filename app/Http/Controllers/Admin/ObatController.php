<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Menampilkan daftar semua data obat.
     */
    public function index()
    {
        $data = Obat::paginate(10);
        return view('layouts.admin.obat.index', compact('data'));
    }

    /**
     * Menampilkan form tambah data obat.
     */
    public function create()
    {
        return view('layouts.admin.obat.create');
    }

    /**
     * Memvalidasi dan menyimpan data obat baru ke database.
     */
    public function store(Request $request)
    {
        Obat::create($request->validate([
            'nama_obat' => 'required',
            'rasa_obat' => 'required',
            'efek_samping' => 'required',
            'harga_obat' => 'required|numeric',
            'bentuk_obat' => 'required',
            'stok_obat' => 'required|numeric'
        ]));
        return redirect()->route('admin.obat.index');
    }

    /**
     * Mengambil data obat tertentu berdasarkan (id) untuk di edit.
     */
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('layouts.admin.obat.edit', compact('obat'));
    }

    /**
     * Memvalidasi atau memperbarui data obat.
     */
    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->update($request->validate([
            'nama_obat' => 'required',
            'rasa_obat' => 'required',
            'efek_samping' => 'required',
            'harga_obat' => 'required|numeric',
            'bentuk_obat' => 'required',
            'stok_obat' => 'required|numeric'
        ]));
        return redirect()->route('admin.obat.index');
    }


    /**
     * Menghapus data obat tertentu.
     */
    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect()->route('admin.obat.index')->with('success', 'Data berhasil dihapus');
    }
}

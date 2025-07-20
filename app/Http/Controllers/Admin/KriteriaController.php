<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Menampilkan daftar semua data kriteria.
     */
    public function index()
    {
        $data = Kriteria::all();
        return view('layouts.admin.kriteria.index', compact('data'));
    }

    /**
     * Menampilkan form tambah data obat.
     */
    public function create()
    {
        return view('layouts.admin.kriteria.create');
    }

    /**
     * Memvalidasi atau menyimpan data kriteria baru ke database.
     */
    public function store(Request $request)
    {
        Kriteria::create($request->validate([
            'nama' => 'required',
            'bobot' => 'required|numeric|min:0|max:1',
            'tipe' => 'required|in:benefit,cost'
        ]));
        return redirect()->route('admin.kriteria.index');
    }

    /**
     * Mengedit data kriteria berdasarkan (id).
     */
    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('layouts.admin.kriteria.edit', compact('kriteria'));
    }

    /**
     * Memvalidasi atau memperbarui dara kriteria.
     */
    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->update($request->validate([
            'nama' => 'required',
            'bobot' => 'required|numeric|min:0|max:1',
            'tipe' => 'required|in:benefit,cost'
        ]));
        return redirect()->route('admin.kriteria.index');
    }

    /**
     * Menghapus data kriteria tertentu.
     */
    public function destroy($id)
    {
        Kriteria::destroy($id);
        return redirect()->route('admin.kriteria.index');
    }
}

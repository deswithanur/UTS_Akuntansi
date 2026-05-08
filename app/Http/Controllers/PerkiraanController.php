<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perkiraan;

class PerkiraanController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
    $perkiraans = Perkiraan::all(); // ambil semua data
    return view('perkiraan.index', compact('perkiraans'));
    }

    // Form tambah data
    public function create()
    {
        return view('perkiraan.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:perkiraan,kode',
            'nama' => 'required',
            'tipe' => 'required',
            'posisi_normal' => 'required',
        ]);

        Perkiraan::create($request->all());

        return redirect()->route('perkiraan.index')->with('success', 'Data perkiraan berhasil ditambahkan.');
    }

    // Form edit data
    public function edit($id)
    {
        $perkiraan = Perkiraan::findOrFail($id);
        return view('perkiraan.edit', compact('perkiraan'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $perkiraan = Perkiraan::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:perkiraan,kode,' . $id,
            'nama' => 'required',
            'tipe' => 'required',
            'posisi_normal' => 'required',
        ]);

        $perkiraan->update($request->all());

        return redirect()->route('perkiraan.index')->with('success', 'Data perkiraan berhasil diupdate.');
    }

    // Hapus data
    public function destroy($id)
    {
        $perkiraan = Perkiraan::findOrFail($id);
        $perkiraan->delete();

        return redirect()->route('perkiraan.index')->with('success', 'Data perkiraan berhasil dihapus.');
    }
}

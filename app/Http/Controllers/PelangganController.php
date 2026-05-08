<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        // Tambahkan validasi sederhana agar kode & nama wajib diisi
        $request->validate([
            'kode' => 'required|unique:pelanggan',
            'nama' => 'required',
        ]);

        Pelanggan::create($request->all());
        
        // Tambahkan pesan sukses untuk ditampilkan di view
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambah!');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        
        // Validasi saat update
        $request->validate([
            'kode' => 'required|unique:pelanggan,kode,'.$id,
            'nama' => 'required',
        ]);

        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diubah!');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus!');
    }
}

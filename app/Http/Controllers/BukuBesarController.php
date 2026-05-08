<?php

namespace App\Http\Controllers;

use App\Models\BukuBesar;
use App\Models\Perkiraan; // Tambahkan ini jika nanti butuh buat create/edit
use Illuminate\Http\Request;

class BukuBesarController extends Controller
{
    // 1. Tampilkan halaman utama Buku Besar
    public function index()
    {
        // Ambil data (sesuaikan variabel dengan yang ada di file Blade: buku_besar)
        $buku_besar = BukuBesar::with(['perkiraan', 'jurnalDetail'])->get();
        
        // Kirim ke file: resources/views/buku_besar/index.blade.php
        return view('buku_besar.index', compact('buku_besar'));
    }

    // 2. Tampilkan form untuk tambah data
    public function create()
    {
        // Biasanya butuh daftar perkiraan untuk dropdown di form
        $perkiraan = Perkiraan::all();
        return view('buku_besar.create', compact('perkiraan'));
    }

    // 3. Simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'perkiraan_id' => 'required|exists:perkiraan,id',
            'tanggal' => 'required|date',
            'no_ref' => 'nullable|string|max:50',
            'deskripsi' => 'nullable|string',
            'debit' => 'required|numeric',
            'kredit' => 'required|numeric',
            'saldo' => 'required|numeric',
            'jurnal_detail_id' => 'required|exists:jurnal_detail,id',
            'posisi' => 'required|in:debit,kredit',
        ]);

        BukuBesar::create($validated);

        // Setelah simpan, balik ke halaman index dengan pesan sukses
        return redirect()->route('buku_besar.index')->with('success', 'Data Buku Besar berhasil ditambahkan!');
    }

    // 4. Tampilkan form edit
    public function edit(BukuBesar $bukuBesar)
    {
        $perkiraan = Perkiraan::all();
        return view('buku_besar.edit', compact('bukuBesar', 'perkiraan'));
    }

    // 5. Update data
    public function update(Request $request, BukuBesar $bukuBesar)
    {
        $validated = $request->validate([
            'perkiraan_id' => 'sometimes|exists:perkiraan,id',
            'tanggal' => 'sometimes|date',
            'no_ref' => 'nullable|string|max:50',
            'deskripsi' => 'nullable|string',
            'debit' => 'sometimes|numeric',
            'kredit' => 'sometimes|numeric',
            'saldo' => 'sometimes|numeric',
            'jurnal_detail_id' => 'sometimes|exists:jurnal_detail,id',
            'posisi' => 'sometimes|in:debit,kredit',
        ]);

        $bukuBesar->update($validated);

        return redirect()->route('buku_besar.index')->with('success', 'Data berhasil diperbarui!');
    }

    // 6. Hapus data
    public function destroy(BukuBesar $bukuBesar)
    {
        $bukuBesar->delete();
        return redirect()->route('buku_besar.index')->with('success', 'Data berhasil dihapus!');
    }
}

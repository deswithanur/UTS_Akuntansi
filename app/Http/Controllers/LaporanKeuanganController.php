<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeuangan;
use Illuminate\Http\Request;

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $laporan_keuangan = LaporanKeuangan::all();

        return view('laporan_keuangan.index', compact('laporan_keuangan'));
    }

    public function create()
    {
        return view('laporan_keuangan.create');
    }

    public function store(Request $request)
    {
        LaporanKeuangan::create($request->all());

        return redirect()->route('laporan_keuangan.index');
    }

    public function edit($id)
    {
        $laporan_keuangan = LaporanKeuangan::findOrFail($id);

        return view('laporan_keuangan.edit', compact('laporan_keuangan'));
    }

    public function update(Request $request, $id)
    {
        $laporan_keuangan = LaporanKeuangan::findOrFail($id);

        $laporan_keuangan->update($request->all());

        return redirect()->route('laporan_keuangan.index');
    }

    public function destroy($id)
    {
        $laporan_keuangan = LaporanKeuangan::findOrFail($id);

        $laporan_keuangan->delete();

        return redirect()->route('laporan_keuangan.index');
    }
}
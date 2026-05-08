<?php

namespace App\Http\Controllers;

use App\Models\FakturPenjualan;
use Illuminate\Http\Request;

class FakturPenjualanController extends Controller
{
    public function index()
    {
        $faktur = FakturPenjualan::all();
        return view('faktur_penjualan.index', compact('faktur'));
    }

    public function create()
    {
        return view('faktur_penjualan.create');
    }

    public function store(Request $request)
    {
        FakturPenjualan::create($request->all());
        return redirect()->route('faktur_penjualan.index');
    }

    public function edit($id)
    {
        $faktur = FakturPenjualan::findOrFail($id);
        return view('faktur_penjualan.edit', compact('faktur'));
    }

    public function update(Request $request, $id)
    {
        $faktur = FakturPenjualan::findOrFail($id);
        $faktur->update($request->all());

        return redirect()->route('faktur_penjualan.index');
    }

    public function destroy($id)
    {
        $faktur = FakturPenjualan::findOrFail($id);
        $faktur->delete();

        return redirect()->route('faktur_penjualan.index');
    }
}
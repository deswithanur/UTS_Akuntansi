<?php

namespace App\Http\Controllers;

use App\Models\FakturPembelian;
use Illuminate\Http\Request;

class FakturPembelianController extends Controller
{
    public function index()
    {
        $faktur = FakturPembelian::all();
        return view('faktur_pembelian.index', compact('faktur'));
    }

    public function create()
    {
        return view('faktur_pembelian.create');
    }

    public function store(Request $request)
    {
        FakturPembelian::create($request->all());
        return redirect()->route('faktur_pembelian.index');
    }

    public function edit($id)
    {
        $faktur = FakturPembelian::findOrFail($id);
        return view('faktur_pembelian.edit', compact('faktur'));
    }

    public function update(Request $request, $id)
    {
        $faktur = FakturPembelian::findOrFail($id);
        $faktur->update($request->all());

        return redirect()->route('faktur_pembelian.index');
    }

    public function destroy($id)
    {
        $faktur = FakturPembelian::findOrFail($id);
        $faktur->delete();

        return redirect()->route('faktur_pembelian.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\NeracaSaldo;
use Illuminate\Http\Request;

class NeracaSaldoController extends Controller
{
    public function index()
    {
        $neraca_saldo = NeracaSaldo::all();

        return view('neraca_saldo.index', compact('neraca_saldo'));
    }

    public function create()
    {
        return view('neraca_saldo.create');
    }

    public function store(Request $request)
    {
        NeracaSaldo::create($request->all());

        return redirect()->route('neraca_saldo.index');
    }

    public function edit($id)
    {
        $neraca_saldo = NeracaSaldo::findOrFail($id);

        return view('neraca_saldo.edit', compact('neraca_saldo'));
    }

    public function update(Request $request, $id)
    {
        $neraca_saldo = NeracaSaldo::findOrFail($id);

        $neraca_saldo->update($request->all());

        return redirect()->route('neraca_saldo.index');
    }

    public function destroy($id)
    {
        $neraca_saldo = NeracaSaldo::findOrFail($id);

        $neraca_saldo->delete();

        return redirect()->route('neraca_saldo.index');
    }
}
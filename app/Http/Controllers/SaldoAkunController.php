<?php

namespace App\Http\Controllers;

use App\Models\SaldoAkun;
use Illuminate\Http\Request;

class SaldoAkunController extends Controller
{
    public function index()
    {
        $saldo_akun = SaldoAkun::all();

        return view('saldo_akun.index', compact('saldo_akun'));
    }

    public function create()
    {
        return view('saldo_akun.create');
    }

    public function store(Request $request)
    {
        SaldoAkun::create($request->all());

        return redirect()->route('saldo_akun.index');
    }

    public function edit($id)
    {
        $saldo_akun = SaldoAkun::findOrFail($id);

        return view('saldo_akun.edit', compact('saldo_akun'));
    }

    public function update(Request $request, $id)
    {
        $saldo_akun = SaldoAkun::findOrFail($id);

        $saldo_akun->update($request->all());

        return redirect()->route('saldo_akun.index');
    }

    public function destroy($id)
    {
        $saldo_akun = SaldoAkun::findOrFail($id);

        $saldo_akun->delete();

        return redirect()->route('saldo_akun.index');
    }
}
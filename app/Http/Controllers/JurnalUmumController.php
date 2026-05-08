<?php

namespace App\Http\Controllers;

use App\Models\JurnalUmum;
use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    public function index()
    {
        $jurnal = JurnalUmum::all();

        return view('jurnal_umum.index', compact('jurnal'));
    }

    public function create()
    {
        return view('jurnal_umum.create');
    }

    public function store(Request $request)
    {
        JurnalUmum::create($request->all());

        return redirect()->route('jurnal_umum.index');
    }

    public function edit($id)
    {
        $jurnal = JurnalUmum::findOrFail($id);

        return view('jurnal_umum.edit', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
        $jurnal = JurnalUmum::findOrFail($id);

        $jurnal->update($request->all());

        return redirect()->route('jurnal_umum.index');
    }

    public function destroy($id)
    {
        $jurnal = JurnalUmum::findOrFail($id);

        $jurnal->delete();

        return redirect()->route('jurnal_umum.index');
    }
}
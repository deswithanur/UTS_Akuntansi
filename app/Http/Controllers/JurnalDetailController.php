<?php

namespace App\Http\Controllers;

use App\Models\JurnalDetail;
use Illuminate\Http\Request;

class JurnalDetailController extends Controller
{
    public function index()
    {
        $jurnal_detail = JurnalDetail::all();
        return view('jurnal_detail.index', compact('jurnal_detail'));
    }

    public function create()
    {
        return view('jurnal_detail.create');
    }

    public function store(Request $request)
    {
        JurnalDetail::create($request->all());

        return redirect()->route('jurnal_detail.index');
    }

    public function edit($id)
    {
        $jurnal_detail = JurnalDetail::findOrFail($id);

        return view('jurnal_detail.edit', compact('jurnal_detail'));
    }

    public function update(Request $request, $id)
    {
        $jurnal_detail = JurnalDetail::findOrFail($id);

        $jurnal_detail->update($request->all());

        return redirect()->route('jurnal_detail.index');
    }

    public function destroy($id)
    {
        $jurnal_detail = JurnalDetail::findOrFail($id);

        $jurnal_detail->delete();

        return redirect()->route('jurnal_detail.index');
    }
}
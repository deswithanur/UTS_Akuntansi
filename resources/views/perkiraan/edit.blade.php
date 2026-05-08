@extends('layouts.app')

@section('content')
<h2>Edit Data Perkiraan</h2>

<form action="{{ route('perkiraan.update', $perkiraan->id) }}" method="POST">
    @csrf
    @method('PUT') {{-- Metode PUT untuk update --}}

    <div class="mb-3">
        <label for="kode" class="form-label">Kode</label>
        <input type="text" name="kode" id="kode" class="form-control" value="{{ $perkiraan->kode }}" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $perkiraan->nama }}" required>
    </div>

    <div class="mb-3">
        <label for="tipe" class="form-label">Tipe</label>
        <select name="tipe" id="tipe" class="form-select" required>
            <option value="Pendapatan" {{ $perkiraan->tipe == 'Pendapatan' ? 'selected' : '' }}>Pendapatan</option>
            <option value="Beban" {{ $perkiraan->tipe == 'Beban' ? 'selected' : '' }}>Beban</option>
            <option value="Aset" {{ $perkiraan->tipe == 'Aset' ? 'selected' : '' }}>Aset</option>
            <option value="Kewajiban" {{ $perkiraan->tipe == 'Kewajiban' ? 'selected' : '' }}>Kewajiban</option>
            <option value="Modal" {{ $perkiraan->tipe == 'Modal' ? 'selected' : '' }}>Modal</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="posisi_normal" class="form-label">Posisi Normal</label>
        <select name="posisi_normal" id="posisi_normal" class="form-select" required>
            <option value="Debit" {{ $perkiraan->posisi_normal == 'Debit' ? 'selected' : '' }}>Debit</option>
            <option value="Kredit" {{ $perkiraan->posisi_normal == 'Kredit' ? 'selected' : '' }}>Kredit</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <input type="number" name="level" id="level" class="form-control" value="{{ $perkiraan->level }}">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="is_detail" id="is_detail" class="form-check-input" {{ $perkiraan->is_detail ? 'checked' : '' }}>
        <label for="is_detail" class="form-check-label">Detail</label>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" id="is_active" class="form-check-input" {{ $perkiraan->is_active ? 'checked' : '' }}>
        <label for="is_active" class="form-check-label">Aktif</label>
    </div>

    <div class="mb-3">
        <label for="saldo_awal" class="form-label">Saldo Awal</label>
        <input type="number" step="0.01" name="saldo_awal" id="saldo_awal" class="form-control" value="{{ $perkiraan->saldo_awal }}">
    </div>

    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control">{{ $perkiraan->keterangan }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('perkiraan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
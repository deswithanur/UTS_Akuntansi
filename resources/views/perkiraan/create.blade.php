@extends('layouts.app')

@section('content')
<h2>Tambah Data Perkiraan</h2>

<form action="{{ route('perkiraan.store') }}" method="POST">
@csrf
<label>Kode</label>
<input type="text" name="kode" required><br>
<label>Nama</label>
<input type="text" name="nama" required><br>
<label>Tipe</label>
<select name="tipe">
<option>Pendapatan</option>
<option>Beban</option>
<option>Aset</option>
<option>Kewajiban</option>
<option>Modal</option>
</select><br>
<label>Posisi Normal</label>
<select name="posisi_normal">
<option>Debit</option>
<option>Kredit</option>
</select><br>
<button type="submit">Simpan</button>
</form>
@endsection
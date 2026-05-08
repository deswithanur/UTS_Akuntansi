@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pelanggan</h1>
    
    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Pelanggan</label>
            <input type="text" name="kode" value="{{ $pelanggan->kode }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" value="{{ $pelanggan->nama }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

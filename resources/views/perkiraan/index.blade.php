@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header & Judul -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-1">Data Perkiraan <span class="text-muted fs-5">/ Chart of Account</span></h2>
            <p class="text-secondary small mb-0">Kelola daftar akun keuangan dan saldo awal Anda.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary btn-sm rounded-pill px-3 me-2">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a>
            <a href="{{ route('perkiraan.create') }}" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
    </div>

    <!-- Notifikasi Success -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card Tabel -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-3 text-uppercase text-secondary small fw-bold">No</th>
                        <th class="text-uppercase text-secondary small fw-bold">Kode</th>
                        <th class="text-uppercase text-secondary small fw-bold">Nama</th>
                        <th class="text-uppercase text-secondary small fw-bold">Tipe</th>
                        <th class="text-uppercase text-secondary small fw-bold">Posisi</th>
                        <th class="text-uppercase text-secondary small fw-bold text-center">Level</th>
                        <th class="text-uppercase text-secondary small fw-bold text-center">Aktif</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end">Saldo Awal</th>
                        <th class="text-uppercase text-secondary small fw-bold text-center pe-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perkiraans as $no => $p)
                    <tr>
                        <td class="ps-3 text-secondary">{{ $no + 1 }}</td>
                        <td class="fw-bold text-primary">{{ $p->kode }}</td>
                        <td>
                            <div class="fw-bold text-dark">{{ $p->nama }}</div>
                            <small class="text-muted">Parent: {{ $p->parent?->nama ?? '-' }}</small>
                        </td>
                        <td><span class="badge bg-info text-dark fw-normal small">{{ $p->tipe }}</span></td>
                        <td class="text-secondary small">{{ $p->posisi_normal }}</td>
                        <td class="text-center"><span class="badge rounded-pill bg-light text-dark border">{{ $p->level }}</span></td>
                        <td class="text-center">
                            @if($p->is_active)
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2">Aktif</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2">Non-Aktif</span>
                            @endif
                        </td>
                        <td class="text-end fw-bold font-monospace text-dark">
                            {{ number_format($p->saldo_awal, 2, ',', '.') }}
                        </td>
                        <td class="text-center pe-3">
                            <div class="btn-group border rounded-3 shadow-sm bg-white">
                                <a href="{{ route('perkiraan.edit', $p->id) }}" class="btn btn-sm btn-light border-end" title="Edit">
                                    <i class="bi bi-pencil-square text-primary"></i> Edit
                                </a>
                                <form action="{{ route('perkiraan.destroy', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light" onclick="return confirm('Yakin ingin menghapus data ini?')" title="Hapus">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan icon Bootstrap jika belum ada -->
<link rel="stylesheet" href="https://jsdelivr.net">
@endsection

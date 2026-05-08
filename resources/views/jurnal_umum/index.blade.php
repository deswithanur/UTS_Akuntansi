@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-1">Data Jurnal Umum</h2>
            <p class="text-secondary small mb-0">Riwayat transaksi jurnal akuntansi perusahaan.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary btn-sm rounded-pill px-3 me-2">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a>
            <a href="{{ route('jurnal_umum.create') }}" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Jurnal
            </a>
        </div>
    </div>

    <!-- Card Tabel -->
    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 text-uppercase text-secondary small fw-bold" style="width: 80px;">No</th>
                        <th class="text-uppercase text-secondary small fw-bold">No Jurnal</th>
                        <th class="text-uppercase text-secondary small fw-bold">Tanggal</th>
                        <th class="text-uppercase text-secondary small fw-bold">Tipe</th>
                        <th class="text-uppercase text-secondary small fw-bold text-center">Status</th>
                        <th class="text-uppercase text-secondary small fw-bold text-center pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jurnal as $item)
                    <tr>
                        <td class="ps-4 text-secondary">{{ $loop->iteration }}</td>
                        <td class="fw-bold text-dark">{{ $item->no_jurnal }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar3 me-2 text-secondary"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border px-2 fw-normal italic">
                                {{ $item->tipe }}
                            </span>
                        </td>
                        <td class="text-center">
                            @if($item->status == 'Posted')
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 rounded-pill">
                                    <i class="bi bi-check-circle-fill me-1"></i> Posted
                                </span>
                            @else
                                <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle px-3 rounded-pill">
                                    <i class="bi bi-clock-history me-1"></i> Draft
                                </span>
                            @endif
                        </td>
                        <td class="text-center pe-4">
                            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-secondary">
                            <i class="bi bi-folder2-open fs-1 d-block mb-2"></i>
                            Belum ada data jurnal.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan icon Bootstrap jika belum ada di Master Layout -->
<link rel="stylesheet" href="https://jsdelivr.net">
@endsection

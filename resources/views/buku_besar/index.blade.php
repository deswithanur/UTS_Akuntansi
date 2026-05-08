@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-1">Buku Besar <span class="text-muted fs-5">/ General Ledger</span></h2>
            <p class="text-secondary small mb-0">Rincian mutasi transaksi dan saldo berjalan.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary btn-sm rounded-pill px-3 me-2">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a>
            <a href="{{ route('buku_besar.create') }}" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
    </div>

    <!-- Card Tabel -->
    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 text-uppercase text-secondary small fw-bold" style="width: 70px;">No</th>
                        <th class="text-uppercase text-secondary small fw-bold">Tanggal</th>
                        <th class="text-uppercase text-secondary small fw-bold">No Ref</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end">Debit</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end">Kredit</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end pe-4">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($buku_besar as $item)
                    <tr>
                        <td class="ps-4 text-secondary">{{ $loop->iteration }}</td>
                        <td>
                            <div class="fw-bold text-dark">
                                <i class="bi bi-calendar3 me-2 text-muted small"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border px-2 fw-normal">
                                {{ $item->no_ref }}
                            </span>
                        </td>
                        <td class="text-end font-monospace text-success">
                            {{ number_format($item->debit, 2, ',', '.') }}
                        </td>
                        <td class="text-end font-monospace text-danger">
                            {{ number_format($item->kredit, 2, ',', '.') }}
                        </td>
                        <td class="text-end font-monospace fw-bold pe-4">
                            {{ number_format($item->saldo, 2, ',', '.') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-secondary">
                            <i class="bi bi-book-half fs-1 d-block mb-2 text-muted"></i>
                            Belum ada data di Buku Besar.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan icon Bootstrap jika belum ada -->
<link rel="stylesheet" href="https://jsdelivr.net">
@endsection

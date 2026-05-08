@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-1">Detail Transaksi Jurnal</h2>
            <p class="text-secondary small mb-0">Rincian alokasi debit dan kredit per akun perkiraan.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary btn-sm rounded-pill px-3 me-2">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a>
            <a href="{{ route('jurnal_detail.create') }}" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Item
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
                        <th class="text-uppercase text-secondary small fw-bold">ID Jurnal</th>
                        <th class="text-uppercase text-secondary small fw-bold">Akun Perkiraan</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end">Debit</th>
                        <th class="text-uppercase text-secondary small fw-bold text-end pe-4">Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $totalDebit = 0; 
                        $totalKredit = 0; 
                    @endphp

                    @forelse($jurnal_detail as $item)
                    <tr>
                        <td class="ps-4 text-secondary">{{ $loop->iteration }}</td>
                        <td>
                            <span class="badge bg-secondary-subtle text-secondary border px-2">
                                #{{ $item->jurnal_id }}
                            </span>
                        </td>
                        <td>
                            <div class="fw-bold text-dark">{{ $item->perkiraan_id }}</div>
                            <small class="text-muted italic">ID Akun</small>
                        </td>
                        <td class="text-end font-monospace fw-bold text-success">
                            {{ number_format($item->debit, 2, ',', '.') }}
                        </td>
                        <td class="text-end font-monospace fw-bold text-danger pe-4">
                            {{ number_format($item->kredit, 2, ',', '.') }}
                        </td>
                    </tr>
                    @php 
                        $totalDebit += $item->debit; 
                        $totalKredit += $item->kredit; 
                    @endphp
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-secondary">
                            <i class="bi bi-file-earmark-text fs-1 d-block mb-2"></i>
                            Belum ada rincian data.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
                <!-- Footer untuk Total -->
                @if($jurnal_detail->count() > 0)
                <tfoot class="bg-light fw-bold border-top">
                    <tr>
                        <td colspan="3" class="text-end py-3">TOTAL :</td>
                        <td class="text-end text-success">{{ number_format($totalDebit, 2, ',', '.') }}</td>
                        <td class="text-end text-danger pe-4">{{ number_format($totalKredit, 2, ',', '.') }}</td>
                    </tr>
                </tfoot>
                @endif
            </table>
        </div>
    </div>

    <!-- Info Warning jika Balance tidak sama -->
    @if($totalDebit != $totalKredit)
    <div class="alert alert-warning mt-3 border-0 shadow-sm d-flex align-items-center" role="alert">
        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
        <div>
            <strong>Perhatian:</strong> Total Debit dan Kredit tidak seimbang (Balance). Mohon periksa kembali input data Anda.
        </div>
    </div>
    @endif
</div>

<link rel="stylesheet" href="https://jsdelivr.net">
@endsection

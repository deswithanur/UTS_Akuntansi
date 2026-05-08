<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Saldo Akun</title>
    <!-- LINK BOOTSTRAP YANG SUDAH DIPERBAIKI -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <link rel="stylesheet" href="https://jsdelivr.net">
    
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .bg-light { background-color: #f8f9fa !important; }
        .table thead th { border-top: none; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-0">Data Saldo Akun</h2>
            <p class="text-muted">Ringkasan saldo pembukaan dan penutupan periode.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="/" class="btn btn-outline-secondary rounded-pill px-4 me-2 shadow-sm">
                <i class="bi bi-house-door"></i> Dashboard
            </a>
            <a href="{{ route('saldo_akun.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
    </div>

    <div class="card overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-uppercase text-secondary small fw-bold">
                    <tr>
                        <th class="ps-4 py-3">No</th>
                        <th class="text-center">Tahun</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-end">Saldo Awal</th>
                        <th class="text-end pe-4">Saldo Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($saldo_akun as $item)
                    <tr>
                        <td class="ps-4 text-secondary">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <span class="badge bg-secondary-subtle text-secondary px-3">{{ $item->tahun }}</span>
                        </td>
                        <td class="text-center fw-bold text-dark">{{ $item->bulan }}</td>
                        <td class="text-end font-monospace text-dark">
                            {{ number_format($item->saldo_awal, 2, ',', '.') }}
                        </td>
                        <td class="text-end font-monospace fw-bold text-primary pe-4">
                            {{ number_format($item->saldo_akhir, 2, ',', '.') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted italic">
                            <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                            Belum ada data saldo akun tersimpan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Script Bootstrap untuk interaksi (opsional) -->
<script src="https://jsdelivr.net"></script>
</body>
</html>

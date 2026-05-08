<!-- resources/views/laporan_keuangan/index.blade.php -->

<h2>Data Laporan Keuangan</h2>

<a href="{{ route('laporan_keuangan.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tipe</th>
        <th>Periode Bulan</th>
        <th>Periode Tahun</th>
        <th>Generated At</th>
    </tr>

    @foreach($laporan_keuangan as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->tipe }}</td>
        <td>{{ $item->periode_bulan }}</td>
        <td>{{ $item->periode_tahun }}</td>
        <td>{{ $item->generated_at }}</td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
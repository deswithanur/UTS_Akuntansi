<!-- resources/views/saldo_akun/index.blade.php -->

<h2>Data Saldo Akun</h2>

<a href="{{ route('saldo_akun.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Bulan</th>
        <th>Saldo Awal</th>
        <th>Saldo Akhir</th>
    </tr>

    @foreach($saldo_akun as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->tahun }}</td>
        <td>{{ $item->bulan }}</td>
        <td>{{ $item->saldo_awal }}</td>
        <td>{{ $item->saldo_akhir }}</td>
    </tr>
    @endforeach
</table>
<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
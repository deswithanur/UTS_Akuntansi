<!-- resources/views/neraca_saldo/index.blade.php -->

<h2>Data Neraca Saldo</h2>

<a href="{{ route('neraca_saldo.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Periode Bulan</th>
        <th>Periode Tahun</th>
        <th>Saldo Debit</th>
        <th>Saldo Kredit</th>
    </tr>

    @foreach($neraca_saldo as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->periode_bulan }}</td>
        <td>{{ $item->periode_tahun }}</td>
        <td>{{ $item->saldo_debit }}</td>
        <td>{{ $item->saldo_kredit }}</td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
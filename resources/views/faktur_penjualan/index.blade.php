<!-- resources/views/faktur_penjualan/index.blade.php -->

<h2>Data Faktur Penjualan</h2>

<a href="{{ route('faktur_penjualan.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>No Faktur</th>
        <th>Tanggal</th>
        <th>Total</th>
        <th>Status Bayar</th>
    </tr>

    @foreach($faktur as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->no_faktur }}</td>
        <td>{{ $item->tanggal }}</td>
        <td>{{ $item->total }}</td>
        <td>{{ $item->status_bayar }}</td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
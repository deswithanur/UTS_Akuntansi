<!-- resources/views/pembayaran/index.blade.php -->

<h2>Data Pembayaran</h2>

<a href="{{ route('pembayaran.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>No Pembayaran</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Metode</th>
    </tr>

    @foreach($pembayaran as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->no_pembayaran }}</td>
        <td>{{ $item->tanggal }}</td>
        <td>{{ $item->jumlah }}</td>
        <td>{{ $item->metode }}</td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
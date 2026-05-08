<!-- resources/views/pemasok/index.blade.php -->

<h2>Data Pemasok</h2>

<a href="{{ route('pemasok.create') }}">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
    </tr>

    @foreach($pemasok as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kode }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telepon }}</td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

<br>
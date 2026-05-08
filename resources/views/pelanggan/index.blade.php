<!-- resources/views/pelanggan/index.blade.php -->

<h2>Data Pelanggan</h2>

<a href="{{ route('pelanggan.create') }}">Tambah Data</a>

<table border="1" cellpadding="10" style="margin-top: 10px; margin-bottom: 10px;">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Aksi</th> <!-- Tambah kolom Aksi -->
    </tr>

    @foreach($pelanggan as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kode }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telepon }}</td>
        <td>
            <!-- Link untuk Edit -->
            <a href="{{ route('pelanggan.edit', $item->id) }}">Edit</a>
            |
            <!-- Form untuk Hapus -->
            <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="/" class="btn btn-secondary mb-3">
    Kembali ke Dashboard
</a>

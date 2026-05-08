<h2>Tambah Pemasok</h2>

<form action="{{ route('pemasok.store') }}" method="POST">
    @csrf

    <input type="text" name="kode" placeholder="Kode"><br><br>
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="telepon" placeholder="Telepon"><br><br>

    <button type="submit">Simpan</button>
</form>

<h2>Tambah Jurnal Umum</h2>

<form action="{{ route('jurnal_umum.store') }}" method="POST">
    @csrf

    <input type="text" name="no_jurnal" placeholder="No Jurnal"><br><br>
    <input type="date" name="tanggal"><br><br>
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>
<h2>Tambah Buku Besar</h2>

<form action="{{ route('buku_besar.store') }}" method="POST">
    @csrf

    <input type="date" name="tanggal"><br><br>
    <input type="text" name="no_ref" placeholder="No Ref"><br><br>
    <input type="number" name="saldo" placeholder="Saldo"><br><br>

    <button type="submit">Simpan</button>
</form>

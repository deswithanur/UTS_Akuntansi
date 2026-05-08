<h2>Tambah Faktur Pembelian</h2>

<form action="{{ route('faktur_pembelian.store') }}" method="POST">
    @csrf

    <input type="text" name="no_faktur" placeholder="No Faktur"><br><br>
    <input type="date" name="tanggal"><br><br>
    <input type="number" name="total" placeholder="Total"><br><br>

    <button type="submit">Simpan</button>
</form>
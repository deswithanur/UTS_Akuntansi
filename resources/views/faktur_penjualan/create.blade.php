<h2>Tambah Faktur Penjualan</h2>

<form action="{{ route('faktur_penjualan.store') }}" method="POST">
    @csrf

    <input type="text" name="no_faktur" placeholder="No Faktur"><br><br>
    <input type="date" name="tanggal"><br><br>
    <input type="number" name="total" placeholder="Total"><br><br>

    <button type="submit">Simpan</button>
</form>

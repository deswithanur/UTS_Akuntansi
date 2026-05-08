<h2>Tambah Pembayaran</h2>

<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf

    <input type="text" name="no_pembayaran" placeholder="No Pembayaran"><br><br>
    <input type="date" name="tanggal"><br><br>
    <input type="number" name="jumlah" placeholder="Jumlah"><br><br>

    <button type="submit">Simpan</button>
</form>
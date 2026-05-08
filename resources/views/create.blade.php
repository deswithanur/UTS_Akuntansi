<h2>Tambah Saldo Akun</h2>

<form action="{{ route('saldo_akun.store') }}" method="POST">
    @csrf

    <input type="number" name="perkiraan_id" placeholder="Perkiraan ID"><br><br>

    <input type="number" name="tahun" placeholder="Tahun"><br><br>

    <input type="number" name="bulan" placeholder="Bulan"><br><br>

    <input type="number" name="saldo_awal" placeholder="Saldo Awal"><br><br>

    <input type="number" name="debit" placeholder="Debit"><br><br>

    <input type="number" name="kredit" placeholder="Kredit"><br><br>

    <input type="number" name="saldo_akhir" placeholder="Saldo Akhir"><br><br>

    <button type="submit">Simpan</button>
</form>
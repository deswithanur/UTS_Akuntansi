<h2>Tambah Neraca Saldo</h2>

<form action="{{ route('neraca_saldo.store') }}" method="POST">
    @csrf

    <input type="number" name="periode_bulan" placeholder="Periode Bulan"><br><br>

    <input type="number" name="periode_tahun" placeholder="Periode Tahun"><br><br>

    <input type="number" name="perkiraan_id" placeholder="Perkiraan ID"><br><br>

    <input type="number" name="saldo_debit" placeholder="Saldo Debit"><br><br>

    <input type="number" name="saldo_kredit" placeholder="Saldo Kredit"><br><br>

    <button type="submit">Simpan</button>
</form>
<h2>Tambah Jurnal Detail</h2>

<form action="{{ route('jurnal_detail.store') }}" method="POST">
    @csrf

    <input type="number" name="jurnal_id" placeholder="Jurnal ID"><br><br>

    <input type="number" name="perkiraan_id" placeholder="Perkiraan ID"><br><br>

    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

    <input type="number" name="debit" placeholder="Debit"><br><br>

    <input type="number" name="kredit" placeholder="Kredit"><br><br>

    <button type="submit">Simpan</button>
</form>
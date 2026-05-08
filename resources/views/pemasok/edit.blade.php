<h2>Edit Pemasok</h2>

<form action="{{ route('pemasok.update', $pemasok->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="kode" value="{{ $pemasok->kode }}"><br><br>
    <input type="text" name="nama" value="{{ $pemasok->nama }}"><br><br>
    <input type="email" name="email" value="{{ $pemasok->email }}"><br><br>
    <input type="text" name="telepon" value="{{ $pemasok->telepon }}"><br><br>

    <button type="submit">Update</button>
</form>
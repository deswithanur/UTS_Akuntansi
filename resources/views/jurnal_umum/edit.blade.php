<h2>Edit Jurnal Umum</h2>

<form action="{{ route('jurnal_umum.update', $jurnal->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="no_jurnal" value="{{ $jurnal->no_jurnal }}"><br><br>
    <input type="date" name="tanggal" value="{{ $jurnal->tanggal }}"><br><br>
    <textarea name="deskripsi">{{ $jurnal->deskripsi }}</textarea><br><br>

    <button type="submit">Update</button>
</form>
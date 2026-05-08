<!-- resources/views/laporan_keuangan/edit.blade.php -->

<h2>Edit Laporan Keuangan</h2>

<form action="{{ route('laporan_keuangan.update', $laporan_keuangan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="tipe" value="{{ $laporan_keuangan->tipe }}"><br><br>

    <input type="number" name="periode_bulan" value="{{ $laporan_keuangan->periode_bulan }}"><br><br>

    <input type="number" name="periode_tahun" value="{{ $laporan_keuangan->periode_tahun }}"><br><br>

    <textarea name="data">{{ $laporan_keuangan->data }}</textarea><br><br>

    <input type="datetime-local" name="generated_at" value="{{ $laporan_keuangan->generated_at }}"><br><br>

    <input type="number" name="generated_by" value="{{ $laporan_keuangan->generated_by }}"><br><br>

    <button type="submit">Update</button>
</form>
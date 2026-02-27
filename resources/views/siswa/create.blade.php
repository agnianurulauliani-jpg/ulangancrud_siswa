<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form action="{{ url('/siswa') }}" method="POST">
    @csrf

    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Umur : <br>
    <input type="number" name="umur" required><br><br>

    Nilai : <br>
    <input type="number" step="0.01" name="nilai" required><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ url('/siswa') }}">Kembali</a>

</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="{{ url('/siswa/'.$data->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama : <br>
    <input type="text" name="nama" value="{{ $data->nama }}" required><br><br>

    Umur : <br>
    <input type="number" name="umur" value="{{ $data->umur }}" required><br><br>

    Nilai : <br>
    <input type="number" step="0.01" name="nilai" value="{{ $data->nilai }}" required><br><br>

    <button type="submit">Update</button>
    <a href="{{ url('/siswa') }}">Kembali</a>

</form>

</body>
</html>
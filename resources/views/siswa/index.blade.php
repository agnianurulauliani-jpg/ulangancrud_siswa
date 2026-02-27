<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

<a href="{{ route('siswa.create') }}">Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>

    @php $no = 1; @endphp
    @foreach($data as $d)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->umur }}</td>
        <td>{{ $d->nilai }}</td>
        <td>
            <!-- Edit -->
            <a href="{{ route('siswa.edit', $d->id) }}">Edit</a>

            <!-- Delete -->
            <form action="{{ route('siswa.destroy', $d->id) }}" 
                  method="POST" 
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Yakin mau hapus data ini?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
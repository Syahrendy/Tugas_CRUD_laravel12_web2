<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/create" class="btn"> Tambah</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        @foreach($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->telepon }}</td>
            <td>
                <a href="/mahasiswa/{{ $row->id }}/edit" class="btn-edit">Edit</a>

                <form action="/mahasiswa/{{ $row->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
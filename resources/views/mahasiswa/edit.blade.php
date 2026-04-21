<h2>Edit Mahasiswa</h2>

<form method="POST" action="/mahasiswa/{{ $mhs->id }}">
    @csrf
    @method('PUT')

    Nama: <input type="text" name="nama" value="{{ $mhs->nama }}"><br>
    NIM: <input type="text" name="nim" value="{{ $mhs->nim }}"><br>
    Email: <input type="email" name="email" value="{{ $mhs->email }}"><br>
    Telepon: <input type="text" name="telepon" value="{{ $mhs->telepon }}"><br>

    <button type="submit">Update</button>
</form>
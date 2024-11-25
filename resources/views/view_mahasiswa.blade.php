<html>

<body>
  <h2>View Mahasiswa | <a href="{{ url('mahasiswa/create') }}">Input</a></h2>

  <table border="1">
    <tr>
      <th>Nim</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Kode Jurusan</th>
      <th>Aksi</th>
    </tr>
    @foreach($mahasiswas as $mahasiswa)
    <tr>
      <td>{{ $mahasiswa->nim }}</td>
      <td>{{ $mahasiswa->nama }}</td>
      <td>{{ $mahasiswa->alamat }}</td>
      <td>{{ $mahasiswa->kodejurusan }}</td>
      <td>
        <a href="{{ url('mahasiswa') . '/' . $mahasiswa->nim . '/edit' }}">Edit</a>&nbsp;&nbsp;&nbsp;
        <a href="{{ url('mahasiswa') . '/' . $mahasiswa->nim . '/delete' }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>

</html>
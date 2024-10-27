<html>

<head>
  <link rel="stylesheet" href="{{ asset('global.css') }}">
</head>

<body>
  <div class="w-full">
    <div class="mx-auto items-center text-center">
      <h2>View Mahasiswa | <a href="{{url('mahasiswa/create')}}">Input</h2></a>
      <h2>
        <table border=1>
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
              <a href=" {{ url('demo').'/'.$mahasiswa->nim.'/edit' }}">Edit</a>&nbsp;&nbsp;&nbsp;
              <a href="{{ url('demo').'/'.$mahasiswa->nim.'/hapus' }}">Hapus</a>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
    </div>
  </div>
</body>

</html>
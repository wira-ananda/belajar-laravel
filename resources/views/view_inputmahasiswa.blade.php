<html>

<body>
  <h2>Input Mahasiswa</h2>
  <form method="post" action="{{url('mahasiswa/create')}}">
    @csrf
    <input type="text" name="nim" placeholder="Nim"><br><br>
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="alamat" placeholder="Alamat"><br><br>
    <input type="text" name="kodejurusan" placeholder="Kode Jurusan"><br><br>
    <input type="submit" value="proses">
  </form>

</body>
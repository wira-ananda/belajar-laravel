<html>

<body>
  <h2>Input Mahasiswa</h2>
  <form method="post" action="{{url('mahasiswa/create')}}">
    @csrf
    <input type="text" name="nim" placeholder="NIM" value="{{ old('nim') }}">
    @if ($errors->has('nim'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('nim') }}</span>
    @endif
    <br><br>

    <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}">
    @if ($errors->has('nama'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('nama') }}</span>
    @endif
    <br><br>

    <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
    @if ($errors->has('alamat'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('alamat') }}</span>
    @endif
    <br><br>

    <input type="text" name="kodejurusan" placeholder="Kode Jurusan" value="{{ old('kodejurusan') }}">
    @if ($errors->has('kodejurusan'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('kodejurusan') }}</span>
    @endif
    <br><br>

    <input type="submit" value="Proses">
  </form>

</body>
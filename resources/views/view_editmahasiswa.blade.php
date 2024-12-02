<html>

<body>
  <h2>Edit Mahasiswa</h2>
  <form method="post" action="{{url('mahasiswa/edit')}}">
    @csrf
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" readonly>
    @if ($errors->has('nim'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('nim') }}</span>
    @endif
    <br><br>

    <input type="text" name="nama" value="{{ $mahasiswa->nama }}">
    @if ($errors->has('nama'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('nama') }}</span>
    @endif
    <br><br>

    <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}">
    @if ($errors->has('alamat'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('alamat') }}</span>
    @endif
    <br><br>

    <input type="text" name="kodejurusan" value="{{ $mahasiswa->kodejurusan }}">
    @if ($errors->has('kodejurusan'))
    <span class="error" style="color:red; margin-left: 10px;">{{ $errors->first('kodejurusan') }}</span>
    @endif
    <br><br>

    <input type="submit" value="proses">
  </form>

  <body>

</html>
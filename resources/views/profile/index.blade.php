

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $d)
    <img src="/storage/foto/{{$d->foto}}" alt="pp" height="100" width="100">
    @endforeach
    <h1>Profile</h1>
    <p>Lengkapi profilmu!</p>
    <form action="{{route('actionProfile')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        @foreach($result as $d)
        <input type="text" name="nama" value="{{$d->nama}}" placeholder="Nama Panjang"><br>
        <input type="text" name="umur" value="{{$d->umur}}" placeholder="Umur"><br>
        <input type="text" name="jenis_kelamin" value="{{$d->jenis_kelamin}}" placeholder="Jenis Kelamin"><br>
        <input type="text" name="tgl_lahir" value="{{$d->tgl_lahir}}" placeholder="Tanggal Lahir"><br>
        <input type="text" name="tempat_lahir" value="{{$d->tempat_lahir}}" placeholder="Tempat Lahir"><br>
        <input type="text" name="email" value="{{$d->email}}" placeholder="Alamat Email"><br>
        <input type="text" name="no_telp" value="{{$d->no_telp}}" placeholder="Nomor Telefon"><br>
        <input type="text" name="nisn" value="{{$d->nisn}}" placeholder="NISN"><br>
        <input type="text" name="kelas" value="{{$d->kelas}}" placeholder="Kelas"><br>
        <input type="file" name="foto"><br><br>
        @endforeach
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-dark">
    <div class="detail">
        <div class="detail-card">
            <h1>Detail siswa</h1>

            <p><b>ID : </b>{{ $id }}</p>
            <p><b>Nama : </b>{{ $siswa['nama'] }}</p>
            <p><b>Sekolah : </b>{{ $siswa['sekolah'] }}</p>
            <p><b>Alamat : </b>{{ $siswa['alamat'] }}</p>
            <p><b>Deskripsi : </b>{{ $siswa['deskripsi'] }}</p>

            <a href="{{ route('admin.siswa') }}" class="btn btn-primary sticky-down">Kembali Daftar</a>
        </div>
    </div>
</body>
</html>
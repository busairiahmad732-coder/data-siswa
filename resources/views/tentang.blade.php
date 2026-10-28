<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="tentang">
        <h1>tentang website</h1>
        <p>Website Data Siswa merupakan aplikasi berbasis web yang dikembangkan 
            untuk menampilkan informasi dan profil siswa secara terstruktur. 
            Website ini dibuat menggunakan framework Laravel sebagai sarana 
            pembelajaran dan penerapan pengembangan web.
        <br><br>
            Melalui website ini, pengguna dapat melihat daftar siswa dan 
            membuka halaman detail untuk mengetahui informasi setiap siswa, 
            seperti nama, sekolah, alamat, dan deskripsi singkat. Dengan 
            tampilan yang sederhana, informasi siswa dapat disajikan 
            secara lebih rapi dan mudah dipahami.
        <br><br>
            Website ini juga menjadi bagian dari proses belajar pengembangan web, 
            khususnya dalam memahami penggunaan Laravel, Controller, Routing, 
            dan View untuk membangun aplikasi web yang dinamis.
        <br><br>
            Tujuan: Membuat website sederhana yang dapat menampilkan data siswa 
            dengan jelas sekaligus menjadi media pembelajaran dalam pengembangan 
            aplikasi berbasis web.
        <br><br>
            <b>Pengembang :</b>Ahmad Busairi, Wafa Hakam Annur, dan Rasya Ifkian Nezqi
        </p>

        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke baranda</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
</head>
<body>
    <div class="tentang">
        <h1>tentang website</h1>
        <p>Website Data Siswa merupakan aplikasi berbasis web yang dikembangkan 
            untuk menampilkan informasi dan profil siswa secara terstruktur. 
            Website ini dibuat menggunakan framework Laravel sebagai sarana 
            pembelajaran dan penerapan pengembangan web.
        
            Melalui website ini, pengguna dapat melihat daftar siswa dan 
            membuka halaman detail untuk mengetahui informasi setiap siswa, 
            seperti nama, sekolah, alamat, dan deskripsi singkat. Dengan 
            tampilan yang sederhana, informasi siswa dapat disajikan 
            secara lebih rapi dan mudah dipahami.

            Website ini juga menjadi bagian dari proses belajar pengembangan web, 
            khususnya dalam memahami penggunaan Laravel, Controller, Routing, 
            dan View untuk membangun aplikasi web yang dinamis.

            Tujuan: Membuat website sederhana yang dapat menampilkan data siswa 
            dengan jelas sekaligus menjadi media pembelajaran dalam pengembangan 
            aplikasi berbasis web.
        <br><br>
            <b>Pengembang :</b>Ahmad Busairi, Wafa Hakam Annur, Rasya Ifkian Nezqi, Faiz Risky Sandana, 
            dan Fuad Aulia Ahmad
        </p>

        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke beranda</a>
        
    <script src="https://net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>
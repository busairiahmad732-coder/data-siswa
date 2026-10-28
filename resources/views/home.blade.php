<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
</head>
<body>
    @include('componen.navbar')
    
    <div id="homeSlider"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="4000">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="home-slide"
                    style="background-image: url('{{ asset('image/bg1.jpeg') }}')">

                    <div class="home-content">
                        <h1>SELAMAT DATANG di website sederhana</h1>
                        <p>Informasi dan profil siswa dalam satu website.</p>
                        
                        <a href="{{ route('admin.siswa') }}"
                        class="btn btn-primary">Lihat Data</a>

                        <a href="{{ route('admin.profil') }}"
                        class="btn btn-primary">Profil Admin</a>
                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="home-slide"
                    style="background-image: url('{{ asset('image/bg2.jpg') }}')">

                    <div class="home-content">
                        <h1>DATA SISWA KELAS XI RPL</h1>
                        <p><b>SMK Muhammadiyah 6 Rogojampi</b></p>

                        <a href="{{ route('admin.siswa') }}"
                        class="btn btn-primary">Lihat Data</a>
                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="home-slide"
                    style="background-image: url('{{ asset('image/bg3.jpg') }}')">

                    <div class="home-content">
                        <h1>WEBSITE DATA SISWA</h1>
                        <p>Kenali data siswa kelas XI RPL lebih mudah.</p>

                        <a href="{{ route('admin.siswa') }}"
                        class="btn btn-primary">Lihat Data</a>
                    </div>

                </div>
            </div>

        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#homeSlider"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#homeSlider"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>

    </div>

    @include('componen.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>
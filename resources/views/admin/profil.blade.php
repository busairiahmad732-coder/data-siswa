<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
</head>
<body>
    @include('componen.navbar')
    <div class="profil">
    <h2>profil admin</h2>
        <div class="posisi-card">
            <div class="profil-card">
                <div class="foto">
                    <img src="{{ asset('image/ari.png') }}" alt="my foto">
                </div>
                <h6>ahmad busairi</h6>
                <p>smk muhammadiyah 6 rogaojampi</p>
                <p>magang di <b>pt hummatech malang</b></p> 
            </div>
            
            <div class="profil-card">
                <div class="foto">
                    <img src="{{ asset('image/Wafa.png') }}" alt="my foto">
                </div>
                <h6>wafa hakam annur</h6>
                <p>smk muhammadiyah 6 rogaojampi</p>
                <p>magang di <b>pt hummatech malang</b></p> 
            </div>

            <div class="profil-card">
                <div class="foto">
                    <img src="{{ asset('image/Rasya.png') }}" alt="my foto">
                </div>
                <h6>rasya ifqian nezqi</h6>
                <p>smk muhammadiyah 6 rogaojampi</p>
                <p>magang di <b>pt hummatech malang</b></p> 
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

    <a href="{{ route('home') }}" class="btn btn-secondary justify-content-center">Kembali</a>

    @include('componen.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
</head>
<body>
    @include('componen.navbar')

    <div class="daftar">
        <h1>daftar siswa</h1>
        <div class="profil-card row row-cols-1 row-cols-md-2 row-cols-lg-5 g-3">
            @forelse ($dataSiswa as $siswa)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h6>{{ $siswa['nama'] }}</h6>

                        @if (!empty($siswa['pkl']))
                            <span class="badge bg-success mt-2 text-wrap">
                                {{ $siswa['pkl']}}
                            </span>
                        @else 
                            <span class="badge bg-warning mt-2 text-wrap">
                                Not Data
                            </span>
                        @endif
                        <a href="{{ route('admin.siswa.detail',$siswa['id']) }}"
                        class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
                <p>Belum ada data siswa.</p>
            @endforelse
        </div>
        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
    </div>

    @include('componen.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>
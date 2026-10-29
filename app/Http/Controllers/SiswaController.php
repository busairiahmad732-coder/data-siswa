<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = [
        1 => [
            'nama' => 'AHMAD BUSAIRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
            'deskripsi' => 'Belajar dulu ngegame bisa nanti'
        ],
        2 => [
            'nama' => 'AHMAD CANDRA ZULFAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus ngoding, pantang mundur'
        ],
        3 => [
            'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sem semangat mengejar mimpi'
        ],
        4 => [
            'nama' => 'AJI PUTRA PRATAMA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Konsisten dan terus belajar'
        ],
        5 => [
            'nama' => 'ALIF HAFIZ KANDAYAS',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Eksplorasi kode tanpa batas'
        ],
        6 => [
            'nama' => 'ALYA CHOIRUNNISA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Berkarya dengan barisan kode'
        ],
        7 => [
            'nama' => 'ANANDA RIZKI SAPUTRA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
        ],
        8 => [
            'nama' => 'CAISAR TSAUBAN TAUFIQY',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ngoding santai hasil memukau'
        ],
        9 => [
            'nama' => 'DIEMAS ERGA SURYANTARA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pantang pulang sebelum error hilang'
        ],
        10 => [
            'nama' => 'DINA AROFATUL ULA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar tekun demi masa depan'
        ],
        11 => [
            'nama' => 'DINI ARIFATUL UHRO',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat menjalani hari PKL'
        ],
        12 => [
            'nama' => 'FAIZ RIZKY SYANDANA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Watukebo Ds.Watukebo',
            'deskripsi' => 'Yang Bro Rasakan'
        ],
        13 => [
            'nama' => 'FITRI JULIA DEWI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus melangkah dan memperbaiki bug'
        ],
        14 => [
            'nama' => 'FUAD AULIA AHMAD',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Balak Ds.Songgon',
            'deskripsi' => 'Game dulu, belajar mah bisa nanti'
        ],
        15 => [
            'nama' => 'HILMA MAULIDAH LESTARI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus, teliti, dan selesaikan project'
        ],
        16 => [
            'nama' => 'HUMAIRA MAULINA HAPSARI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menata layout web setitik demi setitik'
        ],
        17 => [
            'nama' => 'INTAN AULIA PUTRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sukses itu butuh proses panjang'
        ],
        18 => [
            'nama' => 'KAYLA NURFITRIA R',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menaklukkan syntax satu per satu'
        ],
        19 => [
            'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Kopi panas dan baris kode abadi'
        ],
        20 => [
            'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Mekah ngalor titik, Muncar',
            'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
        ],
        21 => [
            'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
            'deskripsi' => 'angek sama bigmok'
        ],
        22 => [
            'nama' => 'MOHAMMAD AS\'AD SAMSUL ARIFIN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pengalaman berharga di dunia industri'
        ],
        23 => [
            'nama' => 'MUHAMMAD KHOTIBUL OMAM',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Debugging adalah teman sejati'
        ],
        24 => [
            'nama' => 'MUHAMMAD SATRYA SEJATI',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
            'deskripsi' => 'Gospel and glory'
        ],
        25 => [
            'nama' => 'NAGITA RAMADA PUTRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar pemrograman dengan gembira'
        ],
        26 => [
            'nama' => 'PUTRI WULANSARI NUR\'AISYAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Membangun aplikasi impian masa depan'
        ],
        27 => [
            'nama' => 'QUROTUL ALVINA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ketekunan membuahkan hasil terbaik'
        ],
        28 => [
            'nama' => 'RADITYA SARIF HIDAYATULLAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
            'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
        ],
        29 => [
            'nama' => 'RANI AULIYA NINGSIH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus belajar teknologi terbaru'
        ],
        30 => [
            'nama' => 'RASYA IFQIAN NEZQI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung Ds. Kumendung',
            'deskripsi' => 'Coding tipis tipis, game tebal tebal'
        ],
        31 => [
            'nama' => 'ROBITOH MAULIDAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
        ],
        32 => [
            'nama' => 'SUCI MAYZAHROHTUS SITA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat berproses di dunia IT'
        ],
        33 => [
            'nama' => 'UNOK FATHIR AR ROYYAN KINDY',
            'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
            'sekolah' => 'SMK 99 Ngawi Barat',
            'alamat' => 'ROBLOK',
            'deskripsi' => 'Femboy Furry'
        ],
        34 => [
            'nama' => 'VINCA AULIA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menimba ilmu sebanyak-banyaknya'
        ],
        35 => [
            'nama' => 'WAFA HAKAM AN NUR',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Cungkingan Ds.Badean',
            'deskripsi' => 'AMSSRBLHGSHARKM'
        ]
    ];

        return view('admin.siswa', compact('dataSiswa'));
    }

    public function detail($id)
    {
    $dataSiswa = [
        1 => [
            'nama' => 'AHMAD BUSAIRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
            'deskripsi' => 'Belajar dulu ngegame bisa nanti'
        ],
        2 => [
            'nama' => 'AHMAD CANDRA ZULFAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus ngoding, pantang mundur'
        ],
        3 => [
            'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sem semangat mengejar mimpi'
        ],
        4 => [
            'nama' => 'AJI PUTRA PRATAMA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Konsisten dan terus belajar'
        ],
        5 => [
            'nama' => 'ALIF HAFIZ KANDAYAS',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Eksplorasi kode tanpa batas'
        ],
        6 => [
            'nama' => 'ALYA CHOIRUNNISA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Berkarya dengan barisan kode'
        ],
        7 => [
            'nama' => 'ANANDA RIZKI SAPUTRA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
        ],
        8 => [
            'nama' => 'CAISAR TSAUBAN TAUFIQY',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ngoding santai hasil memukau'
        ],
        9 => [
            'nama' => 'DIEMAS ERGA SURYANTARA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pantang pulang sebelum error hilang'
        ],
        10 => [
            'nama' => 'DINA AROFATUL ULA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar tekun demi masa depan'
        ],
        11 => [
            'nama' => 'DINI ARIFATUL UHRO',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat menjalani hari PKL'
        ],
        12 => [
            'nama' => 'FAIZ RIZKY SYANDANA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Watukebo Ds.Watukebo',
            'deskripsi' => 'Yang Bro Rasakan'
        ],
        13 => [
            'nama' => 'FITRI JULIA DEWI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus melangkah dan memperbaiki bug'
        ],
        14 => [
            'nama' => 'FUAD AULIA AHMAD',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Balak Ds.Songgon',
            'deskripsi' => 'Game dulu, belajar mah bisa nanti'
        ],
        15 => [
            'nama' => 'HILMA MAULIDAH LESTARI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus, teliti, dan selesaikan project'
        ],
        16 => [
            'nama' => 'HUMAIRA MAULINA HAPSARI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menata layout web setitik demi setitik'
        ],
        17 => [
            'nama' => 'INTAN AULIA PUTRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sukses itu butuh proses panjang'
        ],
        18 => [
            'nama' => 'KAYLA NURFITRIA R',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menaklukkan syntax satu per satu'
        ],
        19 => [
            'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Kopi panas dan baris kode abadi'
        ],
        20 => [
            'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Mekah ngalor titik, Muncar',
            'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
        ],
        21 => [
            'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
            'deskripsi' => 'angek sama bigmok'
        ],
        22 => [
            'nama' => 'MOHAMMAD AS\'AD SAMSUL ARIFIN',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pengalaman berharga di dunia industri'
        ],
        23 => [
            'nama' => 'MUHAMMAD KHOTIBUL OMAM',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Debugging adalah teman sejati'
        ],
        24 => [
            'nama' => 'MUHAMMAD SATRYA SEJATI',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
            'deskripsi' => 'Gospel and glory'
        ],
        25 => [
            'nama' => 'NAGITA RAMADA PUTRI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar pemrograman dengan gembira'
        ],
        26 => [
            'nama' => 'PUTRI WULANSARI NUR\'AISYAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Membangun aplikasi impian masa depan'
        ],
        27 => [
            'nama' => 'QUROTUL ALVINA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ketekunan membuahkan hasil terbaik'
        ],
        28 => [
            'nama' => 'RADITYA SARIF HIDAYATULLAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
            'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
        ],
        29 => [
            'nama' => 'RANI AULIYA NINGSIH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus belajar teknologi terbaru'
        ],
        30 => [
            'nama' => 'RASYA IFQIAN NEZQI',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung Ds. Kumendung',
            'deskripsi' => 'Coding tipis tipis, game tebal tebal'
        ],
        31 => [
            'nama' => 'ROBITOH MAULIDAH',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
        ],
        32 => [
            'nama' => 'SUCI MAYZAHROHTUS SITA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat berproses di dunia IT'
        ],
        33 => [
            'nama' => 'UNOK FATHIR AR ROYYAN KINDY',
            'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
            'sekolah' => 'SMK 99 Ngawi Barat',
            'alamat' => 'ROBLOK',
            'deskripsi' => 'Femboy Furry'
        ],
        34 => [
            'nama' => 'VINCA AULIA',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menimba ilmu sebanyak-banyaknya'
        ],
        35 => [
            'nama' => 'WAFA HAKAM AN NUR',
            'pkl' => 'PT. Hummatech',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Cungkingan Ds.Badean',
            'deskripsi' => 'AMSSRBLHGSHARKM'
        ]
    ];
        if (!isset($dataSiswa[$id])) {
            abort(404, 'Data tidak ditemukan');
        }

        $siswa = $dataSiswa[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}
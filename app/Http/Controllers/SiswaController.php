<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = [
        [
            "id"=> 1,
            'nama' => 'AHMAD BUSAIRI',
            'pkl' => 'PT. Hummatech Offline',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
            'deskripsi' => 'Belajar dulu ngegame bisa nanti'
        ],
        [
            'id'=> 2,
            'nama' => 'AHMAD CANDRA ZULFAN',
            'pkl' => 'Balai Desa Pondok Nongko',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus ngoding, pantang mundur'
        ],
         [
            'id'=> 3,
            'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
            'pkl' => 'Politeknik Negeri Banyuwangi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat mengejar mimpi'
        ],
        [
            'id'=> 4,
            'nama' => 'AJI PUTRA PRATAMA',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Konsisten dan terus belajar'
        ],
        [
            'id'=> 5,
            'nama' => 'ALIF HAFIZ KANDAYAS',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Eksplorasi kode tanpa batas'
        ],
        [
            'id'=> 6,
            'nama' => 'ALYA CHOIRUNNISA',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Berkarya dengan barisan kode'
        ],
        [
            'id'=> 7,
            'nama' => 'ANANDA RIZKI SAPUTRA',
            'pkl' => 'Balai Desa Pondok Nongko',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
        ],
        [
            'id'=> 8,
            'nama' => 'CAISAR TSAUBAN TAUFIQY',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ngoding santai hasil memukau'
        ],
        [
            'id'=> 9,
            'nama' => 'DIEMAS ERGA SURYANTARA',
            'pkl' => 'Balai Desa Pondok Nongko',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pantang pulang sebelum error hilang'
        ],
        [
            'id'=> 10,
            'nama' => 'DINA AROFATUL ULA',
            'pkl' => 'Politeknik Negeri Banyuwangi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar tekun demi masa depan'
        ],
        [
            'id'=> 11,
            'nama' => 'DINI ARIFATUL UHRO',
            'pkl' => 'Politeknik Negeri Banyuwangi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat menjalani hari PKL'
        ],
        [
            'id'=> 12,
            'nama' => 'FAIZ RIZKY SYANDANA',
            'pkl' => 'PT. Hummatech Offline',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Watukebo Ds.Watukebo',
            'deskripsi' => 'Yang Bro Rasakan'
        ],
        [
            'id'=> 13,
            'nama' => 'FITRI JULIA DEWI',
            'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus melangkah dan memperbaiki bug'
        ],
        [
            'id'=> 14,
            'nama' => 'FUAD AULIA AHMAD',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Balak Ds.Songgon',
            'deskripsi' => 'Game dulu, belajar mah bisa nanti'
        ],
        [
            'id'=> 15,
            'nama' => 'HILMA MAULIDAH LESTARI',
            'pkl' => 'Balai Desa Karang Bendo',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus, teliti, dan selesaikan project'
        ],
        [
            'id'=> 16,
            'nama' => 'HUMAIRA MAULINA HAPSARI',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menata layout web setitik demi setitik'
        ],
        [
            'id'=>17,
            'nama' => 'INTAN AULIA PUTRI',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sukses itu butuh proses panjang'
        ],
        [
            'id'=> 18,
            'nama' => 'KAYLA NURFITRIA R',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menaklukkan syntax satu per satu'
        ],
        [
            'id'=> 19,
            'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
            'pkl' => Null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Kopi panas dan baris kode abadi'
        ],
        [
            'id'=> 20,
            'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Mekah ngalor titik, Muncar',
            'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
        ],
        [
            'id'=> 21,
            'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
            'deskripsi' => 'angek sama bigmok'
        ],
        [
            'id'=> 22,
            'nama' => 'MOHAMMAD ASAD SAMSUL ARIFIN',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pengalaman berharga di dunia industri'
        ],
        [
            'id'=> 23,
            'nama' => 'MUHAMMAD KHOTIBUL OMAM',
            'pkl' => 'Balai Desa Pondok Nongko',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Debugging adalah teman sejati'
        ],
        [
            'id'=> 24,
            'nama' => 'MUHAMMAD SATRYA SEJATI',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
            'deskripsi' => 'Gospel and glory'
        ],
        [
            'id'=> 25,
            'nama' => 'NAGITA RAMADA PUTRI',
            'pkl' => 'Politeknik Negeri Banyuwangi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar pemrograman dengan gembira'
        ],
        [
            'id'=> 26,
            'nama' => 'PUTRI WULANSARI NURAISYAH',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Membangun aplikasi impian masa depan'
        ],
        [
            'id'=> 27,
            'nama' => 'QROTUL ALVINA',
            'pkl' => 'Politeknik Negeri Banyuwangi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Bayu Ds. Plantaran ',
            'deskripsi' => 'Lucu imut fast respon baik'
        ],
        [
            'id'=> 28,
            'nama' => 'RADITYA SARIF HIDAYATULLAH',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
            'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
        ],
        [
            'id'=> 29,
            'nama' => 'RANI AULIYA NINGSIH',
            'pkl' => 'Balai Desa Karang Bendo',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. KarangAnyar Ds. KarangBendo',
            'deskripsi' => 'Terus belajar teknologi terbaru'
        ],
        [
            'id'=> 30,
            'nama' => 'RASYA IFQIAN NEZQI',
            'pkl' => 'PT. Hummatech Offline',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung Ds. Kumendung',
            'deskripsi' => 'Coding tipis tipis, game tebal tebal'
        ],
        [
            'id'=> 31,
            'nama' => 'ROBITOH MAULIDAH',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
        ],
        [
            'id'=> 32,
            'nama' => 'SUCI MAYZAHROHTUS SITA',
            'pkl' => null,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat berproses di dunia IT'
        ],
        [
            'id'=> 33,
            'nama' => 'UNO FATHIR AR ROYYAN KINDY',
            'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'ROBLOK',
            'deskripsi' => 'Femboy Furry'
        ],
        [
            'id'=> 34,
            'nama' => 'VINCA AULIA',
            'pkl' => 'PT. Hummatech Online',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Gak eroh',
            'deskripsi' => 'Yuk Ngoding Sambil Nangis'
        ],
        [
            'id'=> 35,
            'nama' => 'WAFA HAKAM AN NUR',
            'pkl' => 'PT. Hummatech Offline',
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
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
            'deskripsi' => 'Belajar dulu ngegame bisa nanti'
        ],
        2 => [
            'nama' => 'AHMAD CANDRA ZULFAN',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus ngoding, pantang mundur'
        ],
        3 => [
            'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sem semangat mengejar mimpi'
        ],
        4 => [
            'nama' => 'AJI PUTRA PRATAMA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Konsisten dan terus belajar'
        ],
        5 => [
            'nama' => 'ALIF HAFIZ KANDAYAS',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Eksplorasi kode tanpa batas'
        ],
        6 => [
            'nama' => 'ALYA CHOIRUNNISA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Berkarya dengan barisan kode'
        ],
        7 => [
            'nama' => 'ANANDA RIZKI SAPUTRA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
        ],
        8 => [
            'nama' => 'CAISAR TSAUBAN TAUFIQY',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Ngoding santai hasil memukau'
        ],
        9 => [
            'nama' => 'DIEMAS ERGA SURYANTARA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pantang pulang sebelum error hilang'
        ],
        10 => [
            'nama' => 'DINA AROFATUL ULA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar tekun demi masa depan'
        ],
        11 => [
            'nama' => 'DINI ARIFATUL UHRO',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat menjalani hari PKL'
        ],
        12 => [
            'nama' => 'FAIZ RIZKY SYANDANA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Watukebo Ds.Watukebo',
            'deskripsi' => 'Yang Bro Rasakan'
        ],
        13 => [
            'nama' => 'FITRI JULIA DEWI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus melangkah dan memperbaiki bug'
        ],
        14 => [
            'nama' => 'FUAD AULIA AHMAD',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Balak Ds.Songgon',
            'deskripsi' => 'Game dulu, belajar mah bisa nanti'
        ],
        15 => [
            'nama' => 'HILMA MAULIDAH LESTARI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Fokus, teliti, dan selesaikan project'
        ],
        16 => [
            'nama' => 'HUMAIRA MAULINA HAPSARI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menata layout web setitik demi setitik'
        ],
        17 => [
            'nama' => 'INTAN AULIA PUTRI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Sukses itu butuh proses panjang'
        ],
        18 => [
            'nama' => 'KAYLA NURFITRIA R',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menaklukkan syntax satu per satu'
        ],
        19 => [
            'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Kopi panas dan baris kode abadi'
        ],
        20 => [
            'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Mekah ngalor titik, Muncar',
            'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
        ],
        21 => [
            'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
            'deskripsi' => 'angek sama bigmok'
        ],
        22 => [
            'nama' => 'MOHAMMAD AS\'AD SAMSUL ARIFIN',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Pengalaman berharga di dunia industri'
        ],
        23 => [
            'nama' => 'MUHAMMAD KHOTIBUL OMAM',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Debugging adalah teman sejati'
        ],
        24 => [
            'nama' => 'MUHAMMAD SATRYA SEJATI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
            'deskripsi' => 'Gospel and glory'
        ],
        25 => [
            'nama' => 'NAGITA RAMADA PUTRI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Belajar pemrograman dengan gembira'
        ],
        26 => [
            'nama' => 'PUTRI WULANSARI NURAISYAH',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Membangun aplikasi impian masa depan'
        ],
        27 => [
            'nama' => 'QROTUL ALVINA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Bayu Ds. Plantaran ',
            'deskripsi' => 'Lucu imut fast respon baik'
        ],
        28 => [
            'nama' => 'RADITYA SARIF HIDAYATULLAH',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
            'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
        ],
        29 => [
            'nama' => 'RANI AULIYA NINGSIH',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Terus belajar teknologi terbaru'
        ],
        30 => [
            'nama' => 'RASYA IFQIAN NEZQI',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung Ds. Kumendung',
            'deskripsi' => 'Coding tipis tipis, game tebal tebal'
        ],
        31 => [
            'nama' => 'ROBITOH MAULIDAH',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
        ],
        32 => [
            'nama' => 'SUCI MAYZAHROHTUS SITA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Semangat berproses di dunia IT'
        ],
        33 => [
            'nama' => 'UNO FATHIR AR ROYYAN KINDY',
            'sekolah' => 'SMK 99 Ngawi Barat',
            'alamat' => 'ROBLOK',
            'deskripsi' => 'Femboy Furry'
        ],
        34 => [
            'nama' => 'VINCA AULIA',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Rogojampi',
            'deskripsi' => 'Yuk Ngoding Sambil Nangis'
        ],
        35 => [
            'nama' => 'WAFA HAKAM AN NUR',
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
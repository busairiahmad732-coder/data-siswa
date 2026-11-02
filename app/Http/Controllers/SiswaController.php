<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            [
                'id' => 0,
                'nama' => 'Tyas Dyah Safitri',
                'status' => 'Guru Smk muhammadiyah 6 rogojampi'
            ],
            [
                'id' => 1,
                'nama' => 'Hilal Pratama',
                'status' => 'Guru Smk muhammadiyah 6 rogojampi'
            ],
            [
                'id' => 2,
                'nama' => 'AHMAD BUSAIRI',
                'pkl' => 'PT. Hummatech Offline',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
                'deskripsi' => 'Belajar dulu ngegame bisa nanti'
            ],
            [
                'id' => 3,
                'nama' => 'AHMAD CANDRA ZULFAN',
                'pkl' => 'Balai Desa Pondok Nongko',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Fokus ngoding, pantang mundur'
            ],
            [
                'id' => 4,                                           
                'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
                'pkl' => 'Politeknik Negeri Banyuwangi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Semangat mengejar mimpi'
            ],
            [
                'id' => 5,
                'nama' => 'AJI PUTRA PRATAMA',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Konsisten dan terus belajar'
            ],
            [
                'id' => 6,
                'nama' => 'ALIF HAFIZ KANDAYAS',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Eksplorasi kode tanpa batas'
            ],
            [
                'id' => 7,
                'nama' => 'ALYA CHOIRUNNISA',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Berkarya dengan barisan kode'
            ],
            [
                'id' => 8,
                'nama' => 'ANANDA RIZKI SAPUTRA',
                'pkl' => 'Balai Desa Pondok Nongko',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
            ],
            [
                'id' => 9,
                'nama' => 'CAISAR TSAUBAN TAUFIQY',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Ngoding santai hasil memukau'
            ],
            [
                'id' => 10,
                'nama' => 'DIEMAS ERGA SURYANTARA',
                'pkl' => 'Balai Desa Pondok Nongko',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Pantang pulang sebelum error hilang'
            ],
            [
                'id' => 11,
                'nama' => 'DINA AROFATUL ULA',
                'pkl' => 'Politeknik Negeri Banyuwangi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Belajar tekun demi masa depan'
            ],
            [
                'id' => 12,
                'nama' => 'DINI ARIFATUL UHRO',
                'pkl' => 'Politeknik Negeri Banyuwangi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Semangat menjalani hari PKL'
            ],
            [
                'id' => 13,
                'nama' => 'FAIZ RIZKY SYANDANA',
                'pkl' => 'PT. Hummatech Offline',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Watukebo Ds.Watukebo',
                'deskripsi' => 'Yang Bro Rasakan'
            ],
            [
                'id' => 14,
                'nama' => 'FITRI JULIA DEWI',
                'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Terus melangkah dan memperbaiki bug'
            ],
            [
                'id' => 15,
                'nama' => 'FUAD AULIA AHMAD',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Balak Ds.Songgon',
                'deskripsi' => 'Game dulu, belajar mah bisa nanti'
            ],
            [
                'id' => 16,
                'nama' => 'HILMA MAULIDAH LESTARI',
                'pkl' => 'Balai Desa Karang Bendo',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Fokus, teliti, dan selesaikan project'
            ],
            [
                'id' => 17,
                'nama' => 'HUMAIRA MAULINA HAPSARI',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menata layout web setitik demi setitik'
            ],
            [
                'id' => 18,
                'nama' => 'INTAN AULIA PUTRI',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Sukses itu butuh proses panjang'
            ],
            [
                'id' => 19,
                'nama' => 'KAYLA NURFITRIA R',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menaklukkan syntax satu per satu'
            ],
            [
                'id' => 20,
                'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
                'pkl' => Null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Kopi panas dan baris kode abadi'
            ],
            [
                'id' => 21,
                'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Mekah ngalor titik, Muncar',
                'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
            ],
            [
                'id' => 22,
                'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
                'deskripsi' => 'angek sama bigmok'
            ],
            [
                'id' => 23,
                'nama' => 'MOHAMMAD ASAD SAMSUL ARIFIN',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Pengalaman berharga di dunia industri'
            ],
            [
                'id' => 24,
                'nama' => 'MUHAMMAD KHOTIBUL OMAM',
                'pkl' => 'Balai Desa Pondok Nongko',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Debugging adalah teman sejati'
            ],
            [
                'id' => 25,
                'nama' => 'MUHAMMAD SATRYA SEJATI',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
                'deskripsi' => 'Gospel and glory'
            ],
            [
                'id' => 26,
                'nama' => 'NAGITA RAMADA PUTRI',
                'pkl' => 'Politeknik Negeri Banyuwangi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Belajar pemrograman dengan gembira'
            ],
            [
                'id' => 27,
                'nama' => 'PUTRI WULANSARI NURAISYAH',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Membangun aplikasi impian masa depan'
            ],
            [
                'id' => 28,
                'nama' => 'QROTUL ALVINA',
                'pkl' => 'Politeknik Negeri Banyuwangi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Bayu Ds. Plantaran ',
                'deskripsi' => 'Lucu imut fast respon baik'
            ],
            [
                'id' => 29,
                'nama' => 'RADITYA SARIF HIDAYATULLAH',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
                'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
            ],
            [
                'id' => 30,
                'nama' => 'RANI AULIYA NINGSIH',
                'pkl' => 'Balai Desa Karang Bendo',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. KarangAnyar Ds. KarangBendo',
                'deskripsi' => 'Terus belajar teknologi terbaru'
            ],
            [
                'id' => 31,
                'nama' => 'RASYA IFQIAN NEZQI',
                'pkl' => 'PT. Hummatech Offline',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Kumendung Ds. Kumendung',
                'deskripsi' => 'Coding tipis tipis, game tebal tebal'
            ],
            [
                'id' => 32,
                'nama' => 'ROBITOH MAULIDAH',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
            ],
            [
                'id' => 33,
                'nama' => 'SUCI MAYZAHROHTUS SITA',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Semangat berproses di dunia IT'
            ],
            [
                'id' => 34,
                'nama' => 'UNO FATHIR AR ROYYAN KINDY',
                'pkl' => 'SMK Muhammadiyah 6 Rogojampi',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'ROBLOK',
                'deskripsi' => 'Femboy Furry'
            ],
            [
                'id' => 35,
                'nama' => 'VINCA AULIA',
                'pkl' => 'PT. Hummatech Online',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Gak eroh',
                'deskripsi' => 'Yuk Ngoding Sambil Nangis'
            ],
            [
                'id' => 36,
                'nama' => 'WAFA HAKAM AN NUR',
                'pkl' => 'PT. Hummatech Offline',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Cungkingan Ds.Badean',
                'deskripsi' => 'AMSSRBLHGSHARKM'
            ]
        ];

        return view('admin.siswa', compact('data'));
    }

    public function detail($id)
    {
        $data = [
            0 => [
                'nama' => 'Tyas Dyah Safitri',
                'status' => 'Wali Kelas'
            ],
            1=> [
                'nama'=> 'Hilal Pratama',
                'status' => 'Wali Kelas'
            ],

            2 => [
                'nama' => 'AHMAD BUSAIRI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
                'deskripsi' => 'Belajar dulu ngegame bisa nanti'
            ],
            3 => [
                'nama' => 'AHMAD CANDRA ZULFAN',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Fokus ngoding, pantang mundur'
            ],
            4 => [
                'nama' => 'AIS ANZALIKA FAISSHINA NUR AZIZA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Sem semangat mengejar mimpi'
            ],
            5 => [
                'nama' => 'AJI PUTRA PRATAMA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Konsisten dan terus belajar'
            ],
            6    => [
                'nama' => 'ALIF HAFIZ KANDAYAS',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Eksplorasi kode tanpa batas'
            ],
            7 => [
                'nama' => 'ALYA CHOIRUNNISA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Berkarya dengan barisan kode'
            ],
            8 => [
                'nama' => 'ANANDA RIZKI SAPUTRA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Jalani prosesnya nikmati hasilnya'
            ],
            9 => [
                'nama' => 'CAISAR TSAUBAN TAUFIQY',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Ngoding santai hasil memukau'
            ],
            10 => [
                'nama' => 'DIEMAS ERGA SURYANTARA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Pantang pulang sebelum error hilang'
            ],
            11 => [
                'nama' => 'DINA AROFATUL ULA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Belajar tekun demi masa depan'
            ],
            12 => [
                'nama' => 'DINI ARIFATUL UHRO',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Semangat menjalani hari PKL'
            ],
            13 => [
                'nama' => 'FAIZ RIZKY SYANDANA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Watukebo Ds.Watukebo',
                'deskripsi' => 'Yang Bro Rasakan'
            ],
            14 => [
                'nama' => 'FITRI JULIA DEWI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Pacar YB'
            ],
            15 => [
                'nama' => 'FUAD AULIA AHMAD',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Balak Ds.Songgon',
                'deskripsi' => 'Game dulu, belajar mah bisa nanti'
            ],
            16 => [
                'nama' => 'HILMA MAULIDAH LESTARI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Fokus Crypto dan Ngepil pas kodingan eror'
            ],
            17 => [
                'nama' => 'HUMAIRA MAULINA HAPSARI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menata layout web setitik demi setitik'
            ],
            18 => [
                'nama' => 'INTAN AULIA PUTRI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Sukses itu butuh proses panjang'
            ],
            19 => [
                'nama' => 'KAYLA NURFITRIA R',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menaklukkan syntax satu per satu'
            ],
            20 => [
                'nama' => 'M. ALFIN ZIDDAN AL FAWWAJ',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Kopi panas dan baris kode abadi'
            ],
            21 => [
                'nama' => 'M. KHEVIN REZHA NUR ANDREAN',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Mekah ngalor titik, Muncar',
                'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
            ],
            22 => [
                'nama' => 'MOH. DIMAS RYAN ADHI PUTRA SIAGIAN',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
                'deskripsi' => 'angek sama bigmok'
            ],
            23 => [
                'nama' => 'MOHAMMAD AS\'AD SAMSUL ARIFIN',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Pengalaman berharga di dunia industri'
            ],
            24 => [
                'nama' => 'MUHAMMAD KHOTIBUL OMAM',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Debugging adalah teman sejati'
            ],
            25 => [
                'nama' => 'MUHAMMAD SATRYA SEJATI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
                'deskripsi' => 'Gospel and glory'
            ],
            26 => [
                'nama' => 'NAGITA RAMADA PUTRI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Belajar pemrograman dengan gembira'
            ],
            28 => [
                'nama' => 'PUTRI WULANSARI NURAISYAH',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Membangun aplikasi impian masa depan'
            ],
            29 => [
                'nama' => 'QROTUL ALVINA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Bayu Ds. Plantaran ',
                'deskripsi' => 'Lucu imut fast respon baik'
            ],
            30 => [
                'nama' => 'RADITYA SARIF HIDAYATULLAH',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
                'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
            ],
            31 => [
                'nama' => 'RANI AULIYA NINGSIH',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Terus belajar teknologi terbaru'
            ],
            32 => [
                'nama' => 'RASYA IFQIAN NEZQI',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Kumendung Ds. Kumendung',
                'deskripsi' => 'Coding tipis tipis, game tebal tebal'
            ],
            33 => [
                'nama' => 'ROBITOH MAULIDAH',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Menyelesaikan tugas magang tepat waktu'
            ],
            34 => [
                'nama' => 'SUCI MAYZAHROHTUS SITA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Semangat berproses di dunia IT'
            ],
            35 => [
                'nama' => 'UNO FATHIR AR ROYYAN KINDY',
                'sekolah' => 'SMK 99 Ngawi Barat',
                'alamat' => 'ROBLOK',
                'deskripsi' => 'Femboy Furry'
            ],
            36 => [
                'nama' => 'VINCA AULIA',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Rogojampi',
                'deskripsi' => 'Yuk Ngoding Sambil Nangis'
            ],
            37 => [
                'nama' => 'WAFA HAKAM AN NUR',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Cungkingan Ds.Badean',
                'deskripsi' => 'AMSSRBLHGSHARKM'
            ]
        ];
        if (!isset($data[$id])) {
            abort(404, 'Data tidak ditemukan');
        }

        $siswa = $data[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}

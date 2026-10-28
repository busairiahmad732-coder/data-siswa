<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa =   [
            [
            'id' => 1,
            'nama' => 'Ahmad Busairi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
            'deskripsi'=> 'Belajar dulu ngegame bisa nanti'
            ],
            [
            'id' => 2,
            'nama' => 'Wafa Hakam annur',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Cungkingan Ds.Badean',
            'deskripsi'=> 'Suki boleh, Amba suka suka'
            ],
            [
            'id' => 3,
            'nama' => 'Rasya Ifqian nezqi',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung  Ds. Kumendung',
            'deskripsi'=> 'Coding tipis tipis, game tebal tebal'

            ],
            [
            'id'=> 4,
            'nama'=> 'Fuad Aulia Ahmed',
            'sekolah'=> 'SMK Negeri 1 Ngawi',
            'alamat'=> 'Dsn. Balak Ds.Songgon',
            'deskripsi'=> 'Game dulu, belajar mah bisa nanti'
            ],
            [
             'id'=> 5,
             'nama'=> 'Faiz Rizky Syandana',
             'sekolah'=> 'SMK 9 Jomokerto',
             'alamat'=> 'Dsn. Watukebo Ds.Watukebo',
             'deskripsi'=> 'Suki Liar'
            ],
            [
            'id'=> 6,
            'nama'=> 'Moh. Dimas Ryan Adhi Putra Siagian',
            'sekolah'=> 'SMA Negeri 2 Kebumen',
            'alamat'=> 'Dsn. Jagalan Ds.Rogojampi',
            'deskripsi'=> 'angek sama bigmok'
            ],
            [
            'id'=> 7,
            'nama'=> 'Moh. Satrya Sejati',
            'sekolah'=> 'SMK Negeri 2 Ngawi',
            'alamat'=> 'Dsn. Alas Malang Ds.Alas Malang',
            'deskripsi' => 'G and G (Global Glory)'
            ],
            [
            'id'=> 8,
            'nama'=> 'Raditya SawitHidayatullah',
            'sekolah'=> 'SMA Negeri 2 Solo',
            'alamat'=> 'Dsn. Rogojampi Ds.Rogojampi',
            'deksripsi'=> 'Radit Clanker'
            ],
            [
            'id'=> 9,
            'nama'=> 'Unok Fatir Al Royyan Kindy',,
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat'=> 'None',
            'deskripsi'=> 'Femboy'
            ],
        ];
        return view('admin.siswa', compact('dataSiswa'));
    }
    public function detail ($id)
    {
        $dataSiswa = [
            1 => ['nama' => 'Ahmad Busairi','sekolah' => 'SMK Muhammadiyah 6 Rogojampi','alamat' => 'Dsn. Karanganyar Ds.Karangbendo','deskripsi' => 'Belajar dulu ngegame bisa nanti' ],
            2 => ['nama' => 'Wafa Hakam annur','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Cungkingan Ds.Badean','deskripsi'=> 'Suki boleh, Amba suka suka'],
            3 => ['nama' => 'Rasya Ifkian nezqi','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Kumendung  Ds. Kumendung','deskripsi'=> 'Coding tipis tipis, game tebal tebal'],
            4 => ['nama' => 'Fuad Aulia Ahmed','sekolah' => 'SMK Negeri 1 Ngawi','alamat' => 'Dsn. Balak Ds.Songgon','deskripsi'=> 'Game dulu, belajar mah bisa nanti'],
            5 => ['nama' => 'Fais Rizky Syandana','sekolah' => 'SMK 9 Jomokerto','alamat' => 'Dsn. Watukebo Ds.Watukebo','deskripsi'=> 'Suki Liar'],
            6 => ['nama' => 'Moh. Dimas Ryan Adhi Putra Siagian','sekolah'=> 'SMA Negeri 3 Kebumen','alamat' => 'Dsn.Jagalan Ds. Rogojampi','deskripsi' =>'angek ama bigmok'], 
            7 => ['nama' => 'Moh. Satrya Sejati','sekolah'=> 'SMK Negeri 2 Ngawi','alamat' => 'Dsn. Alas Malang Ds.Alas Malang','deskripsi'=> 'G and G (Global Glory)'],
            8 => ['nama' => 'Raditya SawitHidayatullah','sekolah'=> 'SMA Negeri 2 Solo','alamat' => 'Dsn. Rogojampi Ds.Rogojampi','deskripsi'=>'Radit Clanker'], 
            9 => ['nama' => 'Unok Fathir Al Royyan Kindy','sekolah'=> 'SMK Muhammadiyah 6 Rogojampi', 'alamat'=> 'None','deskripsi'=> 'Femboy'],
        ];

        if (!isset($dataSiswa[$id])) {
            abort(404,'Data tidak ditemukan');
        }
        $siswa = $dataSiswa[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}

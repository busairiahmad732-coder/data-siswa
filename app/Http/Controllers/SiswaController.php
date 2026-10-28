<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = [
            [
                'id' => 1,
                'nama' => 'Ahmad Busairi',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
                'deskripsi' => 'Belajar dulu ngegame bisa nanti'
            ],
            [
                'id' => 2,
                'nama' => 'Wafa Hakam an nur',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Cungkingan Ds.Badean',
                'deskripsi' => 'AMSSRBLHGSHARKM'
            ],
            [
                'id' => 3,
                'nama' => 'Rasya Ifqian nezqi',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Kumendung Ds. Kumendung',
                'deskripsi' => 'Coding tipis tipis, game tebal tebal'
            ],
            [
                'id' => 4,
                'nama' => 'Fuad Aulia Ahmad',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Balak Ds.Songgon',
                'deskripsi' => 'Game dulu, belajar mah bisa nanti'
            ],
            [
                'id' => 5,
                'nama' => 'Faiz Rizky Syandana',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Watukebo Ds.Watukebo',
                'deskripsi' => 'Suki Liar'
            ],
            [
                'id' => 6,
                'nama' => 'Moh. Dimas Riyan Adhi Putra Siagian',
                'pkl' => 'PT Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
                'deskripsi' => 'angek sama bigmok'
            ],
            [
                'id' => 7,
                'nama' => 'Moh. Satrya Sejati',
                'pkl'=> null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
                'deskripsi' => 'Gospel and glory'
            ],
            [
                'id' => 8,
                'nama' => 'Raditya Syarif Hidayatullah',
                'pkl'=> 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
                'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
            ],
            [
                'id' => 9,
                'nama' => 'Uno Fatir Al Royyan Kindy',
                'pkl'=> 'SMK Muhammadiyah 6 Rogojampi',
                'sekolah' => 'SMK 99 Ngawi Barat',
                'alamat' => 'ROBLOK',
                'deskripsi' => 'Femboy furry'
            ],
            [
                'id' => 10,
                'nama' => 'Moh. Khevin rezha nur andrean',
                'pkl'=> 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Mekah ngalor titik, Muncar',
                'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
            ],
            [
                'id'=> 11,
                'nama'=> 'Alif Hafiz Kandayas',
                'pkl'=> 'PT. Hummatech',
                'sekolah'=> 'SMK Muhammadiyah 6 Rogojampi',
                'alamat'=> 'Rogojampi',
                'deskripsi'=> 'Be The Best'
            ],
           
        ];

        return view('admin.siswa', compact('dataSiswa'));
    }

    public function detail($id)
    {
        $dataSiswa = [
            1 => [
                'nama' => 'Ahmad Busairi',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Karanganyar Ds.Karangbendo',
                'deskripsi' => 'Belajar dulu ngegame bisa nanti'
            ],
            2 => [
                'nama' => 'Wafa Hakam annur',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Cungkingan Ds.Badean',
                'deskripsi' => 'AMSSRBLHGSHARKM'
            ],
            3 => [
                'nama' => 'Rasya Ifqian nezqi',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Kumendung Ds. Kumendung',
                'deskripsi' => 'Coding tipis tipis, game tebal tebal'
            ],
            4 => [
                'nama' => 'Fuad Aulia Ahmed',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Balak Ds.Songgon',
                'deskripsi' => 'Game dulu, belajar mah bisa nanti'
            ],
            5 => [
                'nama' => 'Faiz Rizky Syandana',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SSMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Watukebo Ds.Watukebo',
                'deskripsi' => 'Yang Bro Rasakan'
            ],
            6 => [
                'nama' => 'Moh. Dimas Ryan Adhi Putra Siagian',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Jagalan Ds.Rogojampi',
                'deskripsi' => 'angek sama bigmok'
            ],
            7 => [
                'nama' => 'Moh. Satrya Sejati',
                'pkl' => null,
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Alas Malang Ds.Alas Malang',
                'deskripsi' => 'Gospel and glory'
            ],
            8 => [
                'nama' => 'Raditya Sarif Hidayatullah',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Dsn. Rogojampi Ds.Rogojampi',
                'deskripsi' => 'Saya akan kembali di kelas XI RPL sebagai murid biasa'
            ],
            9 => [
                'nama' => 'Unok Fatir Al Royyan',
                'pkl'=> 'SMK Muhammadiyah 6 Rogojampi',
                'sekolah' => 'SMK 99 Ngawi Barat',
                'alamat' => 'ROBLOK',
                'deskripsi' => 'Femboy Furry'
            ],
            10 => [
                'nama' => 'Kevin Rezha',
                'pkl' => 'PT. Hummatech',
                'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
                'alamat' => 'Mekah ngalor titik, Muncar',
                'deskripsi' => 'Bayangin ini punya kepin -Rezha auditore'
            ],
            11 => [
                'nama'=> 'Alif Hafiz Kandayas',
                'pkl' => 'PT. Hummatech',
                'sekolah'=> 'SMK Muhammadiyah 6 Rogojampi',
                'alamat'=> 'Rogojampi',
                'deskripsi'=> 'Be The Best'
            ],
        ];

        if (!isset($dataSiswa[$id])) {
            abort(404, 'Data tidak ditemukan');
        }

        $siswa = $dataSiswa[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}

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
            'alamat' => 'Dsn. Karanganyar Ds.Karangbendo'
            ],
            [
            'id' => 2,
            'nama' => 'Wafa Hakam',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Cungkingan Ds.Badean'
            ],
            [
            'id' => 3,
            'nama' => 'Rasya Ifkian',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung  Ds. Kumendung'
            ],
            [
            'id'=> 4,
            'nama'=> 'Fuad Aulia Ahmed',
            'sekolah'=> 'SMK 1 Ngawi',
            'alamat'=> 'Dsn. Balak Ds.Songgon'
            ],
        ];
        return view('admin.siswa', compact('dataSiswa'));
    }
    public function detail ($id)
    {
        $dataSiswa = [
            1 => ['nama' => 'Ahmad Busairi','sekolah' => 'SMK Muhammadiyah 6 Rogojampi','alamat' => 'Dsn. Karanganyar Ds.Karangbendo' ],
            2 => ['nama' => 'Wafa Hakam','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Cungkingan Ds.Badean'],
            3 => ['nama' => 'Rasya Ifkian','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Kumendung  Ds. Kumendung'],
            4 => ['nama' => 'Fuad Aulia Ahmed','sekolah'=> 'SMK 1 Ngawi','alamat','Dsn. Balak Ds.Songgon'],
        ];

        if (!isset($dataSiswa[$id])) {
            abort(404,'Data tidak ditemukan');
        }
        $siswa = $dataSiswa[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}

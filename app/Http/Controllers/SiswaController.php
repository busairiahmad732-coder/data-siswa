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
            'nama' => 'Wafa Ahkam',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Cungkingan Ds.Badean'
            ],
            [
            'id' => 3,
            'nama' => 'Rasya Ifkian',
            'sekolah' => 'SMK Muhammadiyah 6 Rogojampi',
            'alamat' => 'Dsn. Kumendung  Ds. Kumendung'
            ],
        ];
        return view('admin.siswa', compact('dataSiswa'));
    }
    public function detail ($id)
    {
        $dataSiswa = [
            1 => ['nama' => 'Ahmad Busairi','sekolah' => 'SMK Muhammadiyah 6 Rogojampi','alamat' => 'Dsn. Karanganyar Ds.Karangbendo' ],
            2 => ['nama' => 'Wafa Ahkam','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Cungkingan Ds.Badean'],
            3 => ['nama' => 'Rasya Ifkian','sekolah' => 'SMK Muhammadiyah 6 Rogojampi', 'alamat' => 'Dsn. Kumendung  Ds. Kumendung'],
        ];

        if (!isset($dataSiswa[$id])) {
            abort(404,'Data tidak ditemukan');
        }
        $siswa = $dataSiswa[$id];

        return view('admin.detail-siswa', compact('siswa', 'id'));
    }
}

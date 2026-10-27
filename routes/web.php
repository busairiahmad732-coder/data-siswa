<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;

//halaman home
Route::get('/', [HalamanController::class, 'home'])
->name("home");
//halaman tentang
Route::view('/tentang', 'tentang')
->name("tentang");
//redirect
Route::redirect('/dashboard-lama', '/')
->name("dashboard.lama");
//group admin
Route::prefix('admin')->group(function() {
    Route::get('/profil', [HalamanController::class,'profil'])
    ->name("admin.profil");
    Route::get('/siswa', [SiswaController::class,'index'])
    ->name("admin.siswa");
    Route::get('/siswa/{id}', [SiswaController::class,'detail'])
    ->name("admin.siswa.detail");
   

    
});
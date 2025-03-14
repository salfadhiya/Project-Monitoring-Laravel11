<?php

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home.dashboard');

});

Route::get('/search', [SearchController::class, 'globalSearch'])->name('global.search');

//rut crud user
Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah', [UserController::class,'create']);
Route::post('/user/simpan', [UserController::class,'store']);
Route::get('/user/{id}/edit', [UserController::class,'edit']);
Route::post('user/{id}/update', [UserController::class,'update']);
Route::get('/user/{id}/delete', [UserController::class,'destroy']);

//rut proyek
Route::get('/proyek', [ProyekController::class,'index']);
Route::get('/proyek/selengkapnya/{id}', [ProyekController::class, 'selengkapnya'])->name('proyek.selengkapnya');
Route::get('/proyek/tambah', [ProyekController::class,'create']);
Route::post('/proyek/simpan', [ProyekController::class,'store']);
// Route::get('/proyek/{id}/lengkapi', [ProyekController::class,'lengkapi']);
Route::get('/proyek/{id}/lengkapi', [ProyekController::class, 'edit'])->name('proyek.lengkapi');
Route::put('/proyek/{id}/update', [ProyekController::class, 'update'])->name('proyek.update');

//rut crud struktur organisasi
Route::get('/turor', [StrukturOrganisasiController::class,'index']);
Route::get('/turor/{id}/workers', [WorkersController::class,'index']);
Route::get('/turor/tambah', [StrukturOrganisasiController::class,'create']);
Route::post('/turor/simpan', [StrukturOrganisasiController::class,'store']);
Route::get('/turor/{id}/bagan', [StrukturOrganisasiController::class, 'showBagan'])->name('turor.bagan');

//tur crud workers
Route::get('/workers/{id}', [WorkersController::class,'index']);
Route::get('/workers/{id}/tambah', [WorkersController::class, 'create']);
Route::post('/workers/simpan', [WorkersController::class,'store']);
Route::get('/workers/{id}/edit', [WorkersController::class,'edit']);
Route::put('/workers/update/{id}', [WorkersController::class, 'update']); // Mengupdate data berdasarkan id
Route::get('/workers/{id}/delete', [WorkersController::class,'destroy']);

Route::get('/proyek/{id}/delivery', [DeliveryController::class, 'index'])->name('proyek.delivery');
Route::post('/proyek/delivery/simpan', [DeliveryController::class, 'store']);
Route::get('/delivery/{id}/delete', [DeliveryController::class, 'destroy'])->name('delivery.delete');

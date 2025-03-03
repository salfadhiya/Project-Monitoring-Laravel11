<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\WorkersController;

Route::get('/', function () {
    return view('home.dashboard');

});

//rut crud user
Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah', [UserController::class,'create']);
Route::post('/user/simpan', [UserController::class,'store']);
Route::get('/user/{id}/edit', [UserController::class,'edit']);
Route::post('user/{id}/update', [UserController::class,'update']);
Route::get('/user/{id}/delete', [UserController::class,'destroy']);

//rut proyek
Route::get('/proyek', [ProyekController::class,'index']);
Route::get('/proyek/{id}/selengkapnya', [ProyekController::class,'selengkapnya']);

//rut crud struktur organisasi
Route::get('/turor', [StrukturOrganisasiController::class,'index']);
Route::get('/turor/tambah', [StrukturOrganisasiController::class,'create']);
Route::post('/turor/simpan', [StrukturOrganisasiController::class,'store']);
Route::get('/turor/{id}/delete', [StrukturOrganisasiController::class,'destroy']);

//tur crud workers
Route::get('/workers', [WorkersController::class,'index']);

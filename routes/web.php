<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home.dashboard');

});

Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah', [UserController::class,'create']);
Route::post('/user/simpan', [UserController::class,'store']);
Route::get('/user/{id}/edit', [UserController::class,'edit']);
Route::post('/uri: user/{id}/update', [UserController::class,'update']);


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wira', action: function () {
    return view('test');
});

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'view']);

Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);

Route::post('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'store']);

Route::get('/mahasiswa/{nim}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);

Route::post('/mahasiswa/edit', [App\Http\Controllers\MahasiswaController::class, 'update']);

Route::get('/mahasiswa/{nim}/delete', [App\Http\Controllers\MahasiswaController::class, 'destroy']);

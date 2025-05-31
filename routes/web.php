<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/pasien', function () {
    return view('pasien.index');
})->name('pasien');

Route::get('/pasien-create', function () {
    return view('pasien.create');
})->name('pasien.create');

Route::get('/pasien-edit', function () {
    return view('pasien.edit');
})->name('pasien.edit');

Route::get('/pasien-detail', function () {
    return view('pasien.detail');
})->name('pasien.detail');

Route::get('/dokter', function () {
    return view('dokter.index');
})->name('dokter');

Route::get('/dokter-create', function () {
    return view('dokter.create');
})->name('dokter.create');

Route::get('/dokter-edit', function () {
    return view('dokter.edit');
})->name('dokter.edit');

Route::get('/dokter-detail', function () {
    return view('dokter.detail');
})->name('dokter.detail');

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan.index');
})->name('pemeriksaan');

Route::get('/pemeriksaan-create', function () {
    return view('pemeriksaan.create');
})->name('pemeriksaan.create');

Route::get('/pemeriksaan-edit', function () {
    return view('pemeriksaan.edit');
})->name('pemeriksaan.edit');

Route::get('/pemeriksaan-detail', function () {
    return view('pemeriksaan.detail');
})->name('pemeriksaan.detail');




Route::get('/obat', function () {
    return view('obat.index');
})->name('obat');


Route::get('/obat-create', function () {
    return view('obat.create');
})->name('obat.create');
Route::get('/obat-edit', function () {
    return view('obat.edit');
})->name('obat.edit');

Route::get('/obat-detail', function () {
    return view('obat.detail');
})->name('obat.detail');
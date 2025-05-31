<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PemeriksaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('success', 'Berhasil logout');
})->name('logout');

Route::resource('pasiens', PasienController::class);
Route::resource('dokters', DokterController::class);
Route::resource('obats', ObatController::class);
Route::resource('pemeriksaans', PemeriksaanController::class);


// Route::get('/login', function () {
//     return view('auth.login');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('/pasien', function () {
//     return view('pasiens.index');
// })->name('pasien');

// Route::get('/pasien-create', function () {
//     return view('pasien.create');
// })->name('pasien.create');

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
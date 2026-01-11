<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    if (!Session::get('admin_login')) {
        return redirect('/login');
    }
});

/* DASHBOARD */
Route::get('/', function () {
    return view('index');
});

/* MENU NAVBAR */
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/matapelajaran', function () {
    return view('matapelajaran');
});

Route::get('/edukasi', function () {
    return view('edukasi');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});



/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'formLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| MATERI RPL
|--------------------------------------------------------------------------
*/
Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/tambah', [MateriController::class, 'create']);
Route::post('/materi/simpan', [MateriController::class, 'store']);



Route::get('/dashboard', [DashboardController::class, 'index']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('layouts.login');
// });

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->middleware('guest');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
    Route::post('/login', 'authenticate')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

// Route::controller(WargaController::class)->middleware(['auth'])->group(function () {
//     Route::get('warga/index', 'index');
//     Route::get('warga/{nik}/edit', 'edit');
//     Route::get('warga/{nik}/show', 'show');
//     Route::put('warga/update/{nik}', 'update');
//     Route::get('warga/create', 'create');
//     Route::post('warga/submit', 'store');
//     Route::delete('warga/delete/{nik}', 'destroy');
//     Route::get('warga/export/excel', 'export');
// });

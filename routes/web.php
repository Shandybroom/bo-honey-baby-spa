<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;

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

Route::controller(MemberController::class)->middleware(['auth'])->group(function () {
    Route::get('/member', 'index');
    Route::get('member/{id}/edit', 'edit');
    Route::get('member/{id}/show', 'show');
    Route::put('member/update/{id}', 'update');
    Route::get('member/create', 'create');
    Route::post('member/submit', 'store');
    Route::delete('member/delete/{id}', 'destroy');
});

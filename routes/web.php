<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/about', fn() => view('about', ['data' => 'Nawang Alan Andrian', 'hp' => 6285865317821, "email" => "nawangandrian@gmail.com"]))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');

Route::resource('siswa', SiswaController::class);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});

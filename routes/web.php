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
    return view('index');
});
Route::get('/wisata', function () {
    return view('user.wisata');
});
Route::get('/ekonomi', function () {
    return view('user.ekonomi');
});
Route::get('/limbah', function () {
    return view('user.limbah');
});
Route::get('/sdm', function () {
    return view('user.sdm');
});
Route::get('/rumah-belajar', function () {
    return view('user.rumah_belajar');
});
Route::get('/info-pelatihan', function () {
    return view('user.info_pelatihan');
});

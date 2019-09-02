<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('formulir05dan06', function () {
    return view('f56');
});
Route::get('formulir_bimbingan_skripsi', function () {
    return view('fskripsi');
});
Route::get('formulir_bimbingan_pkm', function () {
    return view('fpkm');
});
Route::get('formulir_keterlambatan_dosen', function () {
    return view('fketerlambatan');
});
Route::get('formulir_ketidakhadiran_dosen', function () {
    return view('fketidakhadiran');
});
Route::get('formulir_kebersihan_kelas', function () {
    return view('fkebersihan');
});

Route::get('fkebersihan','HelloController@fkebersihan')->name('fkebersihan');
Route::get('fpkm','HelloController@fpkm' )->name('fpkm');
Route::get('fskripsi','HelloController@fskripsi' )->name('fskripsi');
Route::get('fketidakhadiran','HelloController@fketidakhadiran' )->name('fketidakhadiran');
Route::get('fketerlambatan','HelloController@fketerlambatan' )->name('fketerlambatan');
Route::get('f56','HelloController@f56' )->name('f56');
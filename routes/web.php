<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.index');
});

Route::get('/donasi', function () {
    return view('dashboard.donasi');
});

Route::get('/konten', function () {
    return view('dashboard.konten');
});

Route::get('/volunteer', function () {
    return view('dashboard.volunteer');
});

Route::get('/tracking', function () {
    return view('dashboard.tracking');
});

Route::get('/chartsdonasi', function () {
    return view('dashboard.chartsdonasi');
});

Route::get('/chartsvolunteer', function () {
    return view('dashboard.chartsvolunteer');
});

Route::get('/create_konten', function () {
    return view('dashboard.create_konten');
});

Route::get('konten', 'KontenController@index')->name('konten');
Route::post('konten/save', 'KontenController@save')->name('k.s');
// Route::get('/delete/konten/{id}', 'KontenController@delete');
Route::delete('konten/{id}', 'KontenController@delete')->name('k.d');
Route::get('konten/{id}/edit', 'KontenController@edit')->name('k.e');
Route::patch('konten/{id}', 'KontenController@update')->name('k.u');
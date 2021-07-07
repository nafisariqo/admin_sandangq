<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {

        Route::get('index', 'IndexController@index')->name('index');

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

        Route::get('/sk', function () {
            return view('dashboard.sk');
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

        Route::get('/create_volunteer', function () {
            return view('dashboard.create_volunteer');
        });

        Route::get('/create_sk', function () {
            return view('dashboard.create_sk');
        });

        //konten
        Route::get('konten', 'KontenController@index')->name('konten');
        Route::post('konten/save', 'KontenController@save')->name('k.s');
        Route::delete('konten/{id}', 'KontenController@delete')->name('k.d');
        Route::get('konten/{id}/edit', 'KontenController@edit')->name('k.e');
        Route::patch('/konten/{id}', 'KontenController@update')->name('k.u');
        // Route::post('konten/{id}', 'KontenController@update')->name('k.u');

        //volunteer
        Route::get('volunteer', 'VolunteerController@index')->name('volunteer');
        Route::post('volunteer/save', 'VolunteerController@save')->name('v.s');
        Route::delete('volunteer/{id}', 'VolunteerController@delete')->name('v.d');
        Route::get('volunteer/{id}/edit', 'VolunteerController@edit')->name('v.e');
        Route::patch('volunteer/{id}', 'VolunteerController@update')->name('v.u');

        //donasi
        Route::get('donasi', 'DonasiController@index')->name('donasi');
        Route::post('home/save', 'DonasiController@save')->name('d.s');
        Route::delete('donasi/{id}', 'DonasiController@delete')->name('d.d');

        //sk
        Route::get('sk', 'SkController@index')->name('sk');
        Route::post('sk/save', 'SkController@save')->name('sk.s');
        Route::delete('sk/{id}', 'SkController@delete')->name('sk.d');
        Route::get('sk/{id}/edit', 'SkController@edit')->name('sk.e');
        Route::patch('sk/{id}', 'SkController@update')->name('sk.u');

    Route::get('logout', 'AuthController@logout')->name('logout');

});

//user page
Route::get('/home', function () {
    return view('user.home');
});

Route::get('read', function () {
    return view('user.readmore');
});


//home
Route::get('home', 'HomeController@index')->name('home');
Route::post('home/save', 'DonasiController@saveDonasiUser')->name('save-donasi');

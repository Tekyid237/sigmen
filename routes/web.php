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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/preinscription', 'PreinscriptionController@index')->name('preinscription');
Route::post('/preinscription', 'PreinscriptionController@store');

// Users Routes
Auth::routes(['register' => false]);

// Admins Routes
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
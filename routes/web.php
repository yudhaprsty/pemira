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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){
  Route::get('/listMahasiswa', 'AdminController@listMahasiswa')->name('admin.mahasiswa');
  Route::get('/listPaslon', 'AdminController@listPaslon')->name('admin.paslon');
  Route::get('/tambahPaslon', 'AdminController@tambahPaslon')->name('admin.tambahpaslon');
  Route::get('/tambahMahasiswa', 'AdminController@tambahMahasiswa')->name('admin.tambahmahasiswa');
  Route::get('/hasilPerolehan', 'AdminController@hasilPerolehan')->name('admin.hasilperolehan');

  Route::post('/addPaslon', 'AdminController@addPaslon')->name('admin.addpaslon');
  Route::post('/deletePaslon', 'AdminController@deletePaslon')->name('admin.deletepaslon');
  Route::post('/addMahasiswa', 'AdminController@addMahasiswa')->name('admin.addmahasiswa');
});

Route::group(['prefix' => 'user'], function(){
  // Route::get('/home', 'UserController@home');

  Route::get('/pilih/{paslon_id}', 'UserController@pilih')->name('user.pilih');
});

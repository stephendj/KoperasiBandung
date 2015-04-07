<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

<<<<<<< HEAD
Route::get('/', function()
{
	return View::make('hello');
=======
Route::group(array('prefix' => '/'), function()
{
	Route::get('/', function() {
        return View::make('daftar-koperasi');
    });
    Route::get('tanya', function() {
    	return View::make('FAQ');
    });
    Route::get('ajukan-bentuk', function() {
    	return View::make('pengajuan-pembentukan');
    });
    Route::get('ajukan-bubar', function() {
    	return View::make('pengajuan-pembubaran');
    });
    Route::get('audit', function() {
    	return View::make('unggah-audit');
    });
});

Route::group(array('prefix' => 'admin'), function() {
    Route::get('/', function() {
    	return View::make('login');
    });
    Route::post('/', function() {
    	return Redirect::to('admin/ajuan');
    });
    Route::get('ajuan', function() {
    	return View::make('manajemen-ajuan');
    });
    Route::get('koperasi', function() {
    	return View::make('manajemen-koperasi');
    });
    Route::get('jawab', function() {
    	return View::make('jawab-pertanyaan');
    });
    Route::get('audit', function() {
    	return View::make('cek-audit');
    });
>>>>>>> ddbb093f0954f5ef1d97071ab62f3dfa19d0a3eb
});

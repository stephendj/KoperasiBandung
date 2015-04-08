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

Route::group(array('prefix' => '/'), function()
{
	Route::get('/', 'KoperasiController@showKoperasi');
    Route::get('tanya', function() {
    	return View::make('FAQ');
    });
    
    Route::get('ajukan-bentuk', array('uses' => 'AjuanController@showAjuanBentuk'));
    Route::get('ajukan-bubar', array('uses' => 'AjuanController@showAjuanBubar'));
    Route::post('ajuanbentuk', array('uses' => 'AjuanController@addAjuanBentuk'));
    Route::post('ajuanbubar', array('uses' => 'AjuanController@addAjuanBubar'));

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
<<<<<<< HEAD
    Route::get('ajuan', function() {
    	return View::make('manajemen-ajuan');
    });
    Route::get('koperasi', 'KoperasiController@showAdminKoperasi');
    Route::post('addKoperasi', 'KoperasiController@addKoperasi');
    
=======
    Route::get('ajuan', array('uses' => 'AjuanController@showAjuan'));
    Route::post('ajuan/edit/{id}', array('uses' => 'AjuanController@changeStatus'));
    Route::get('koperasi', function() {
    	return View::make('manajemen-koperasi');
    });
>>>>>>> b2cbc4c44f0670bb491a537f45aeb7bd18fb5e0a
    Route::get('jawab', function() {
    	return View::make('jawab-pertanyaan');
    });
    Route::get('audit', function() {
    	return View::make('cek-audit');
    });
});

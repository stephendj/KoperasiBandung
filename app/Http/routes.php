<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('prefix' => '/'), function()
{
	Route::get('/', 'KoperasiController@showKoperasi');
    Route::post('cari-koperasi', 'KoperasiController@searchKoperasi');
    
    Route::get('ajukan-bentuk', array('uses' => 'AjuanController@showAjuanBentuk'));
    Route::get('ajukan-bubar', array('uses' => 'AjuanController@showAjuanBubar'));
    Route::post('ajuanbentuk', array('uses' => 'AjuanController@addAjuanBentuk'));
    Route::post('ajuanbubar', array('uses' => 'AjuanController@addAjuanBubar'));

    Route::post('bertanya',  array('uses' => 'PertanyaanController@addPertanyaan'));
    Route::get('tanya', array('uses' => 'PertanyaanController@showPertanyaan'));

    Route::get('audit', array('uses' => 'LaporanController@showLaporan'));
    Route::post('laporansend',array('uses' => 'LaporanController@addLaporan'));
    
    
});

Route::group(array('prefix' => 'admin'), function() {
    Route::get('/', array('uses' => 'AdminController@showLogin'));
    Route::post('/', array('uses' => 'AdminController@doLogin'));
    Route::get('logout', array('uses' => 'AdminController@doLogout'));

    Route::get('ajuan', array('middleware' => 'auth', 'uses' => 'AjuanController@showAjuan'));
    Route::post('ajuan/edit/{id}', array('middleware' => 'auth', 'uses' => 'AjuanController@changeStatus'));
    Route::get('ajuan/delete/{id}', array('middleware' => 'auth', 'uses' => 'AjuanController@deleteAjuan'));

    Route::get('koperasi', array('middleware' => 'auth', 'uses' => 'KoperasiController@showAdminKoperasi'));
    Route::post('koperasi/add', array('middleware' => 'auth', 'uses' => 'KoperasiController@addKoperasi'));
    Route::post('koperasi/edit/{id}', array('middleware' => 'auth', 'uses' => 'KoperasiController@editKoperasi'));
    Route::get('koperasi/delete/{id}', array('middleware' => 'auth', 'uses' => 'KoperasiController@deleteKoperasi'));
    
    Route::get('audit', array('uses' => 'LaporanController@showLaporanAdmin'));
    Route::post('audit/editnilai/{id}',array('uses' => 'LaporanController@insertNilai'));    

    Route::get('jawab', array('uses' => 'PertanyaanController@showPertanyaanAdmin'));
    Route::get('deletePertanyaan/{id}', 'PertanyaanController@deletePertanyaan');
    Route::post('jawabPertanyaan/{id}', 'PertanyaanController@addJawaban');
});

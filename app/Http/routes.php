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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::group(array('prefix' => '/'), function()
{
	Route::get('/', 'KoperasiController@showKoperasi');
    
    Route::get('ajukan-bentuk', array('uses' => 'AjuanController@showAjuanBentuk'));
    Route::get('ajukan-bubar', array('uses' => 'AjuanController@showAjuanBubar'));
    Route::post('ajuanbentuk', array('uses' => 'AjuanController@addAjuanBentuk'));
    Route::post('ajuanbubar', array('uses' => 'AjuanController@addAjuanBubar'));

    Route::post('bertanya',  array('uses' => 'PertanyaanController@addPertanyaan'));
    Route::get('tanya', array('uses' => 'PertanyaanController@showPertanyaan'));

    Route::get('audit', function() {
    	return View::make('unggah-audit');
    });
    
});

Route::group(array('prefix' => 'admin'), function() {
    Route::get('/', array('uses' => 'AdminController@showLogin'));
    Route::post('/', array('uses' => 'AdminController@doLogin'));

    Route::get('ajuan', array('uses' => 'AjuanController@showAjuan'));
    Route::post('ajuan/edit/{id}', array('uses' => 'AjuanController@changeStatus'));
    Route::get('ajuan/delete/{id}', array('uses' => 'AjuanController@deleteAjuan'));

    Route::get('koperasi', 'KoperasiController@showAdminKoperasi');
    Route::post('addKoperasi', 'KoperasiController@addKoperasi');
    Route::post('editKoperasi', 'KoperasiController@editKoperasi');
    Route::get('deleteKoperasi/{id}', 'KoperasiController@deleteKoperasi');
    
    Route::get('audit', function() {
    	return View::make('cek-audit');
    });


    Route::get('jawab', array('uses' => 'PertanyaanController@showPertanyaanAdmin'));
    Route::get('deletePertanyaan/{id}', 'PertanyaanController@deletePertanyaan');
    Route::get('jawabPertanyaan/{id}', 'PertanyaanController@addJawaban');
});

<?php

class KoperasiController extends BaseController {

	public function showKoperasi()
	{
		$koperasi=Koperasi::showKoperasi();
		return View::make('daftar-koperasi')->with('koperasi',$koperasi);
	}

	public function showAdminKoperasi()
	{
		$koperasi=Koperasi::showKoperasi();
		return View::make('manajemen-koperasi')->with('koperasi',$koperasi);
	}

	
	public function addKoperasi()
	{
		// Memvalidasi Input
		$rules = array(
			'ID_Number'			=> 'required',
		    'Name' 				=> 'required|unique:koperasi,nama',
		    'jenis_koperasi'	=> 'required',
		    'Address'			=> 'required',
		    'Telephone_Number' 	=> 'required',
		    'Description'   	=> 'required'
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('admin/koperasi')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput()
		        ->with('message', 'Koperasi baru tidak berhasil ditambahkan');
		} else {
			$id_pendiri=Input::get('ID_Number');
			$nama=Input::get('Name');
			$jenis=Input::get('jenis_koperasi');
			$alamat=Input::get('Address');
			$no_telepon=Input::get('Telephone_Number');
			$deskripsi=Input::get('Description');

			Koperasi::createKoperasi($id_pendiri, $nama, $jenis, $alamat, $no_telepon, $deskripsi);
			return Redirect::to('admin/koperasi');
		}

	}

	public function editKoperasi()
	{
		// Memvalidasi Input
		$rules = array(
		    'Name' 				=> 'required|unique:koperasi,nama',
		    'jenis_koperasi'	=> 'required',
		    'Address'			=> 'required',
		    'Telephone_Number' 	=> 'required',
		    'Description'   	=> 'required'
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('admin/koperasi')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput()
		        ->with('message', 'Koperasi tidak berhasil diubah');
		} else {
			$id=Input::get('id');
			$id_pendiri=Input::get('ID_Number');
			$nama=Input::get('Name');
			$jenis=Input::get('jenis_koperasi');
			$alamat=Input::get('Address');
			$no_telepon=Input::get('Telephone_Number');
			$deskripsi=Input::get('Description');
			Koperasi::editKoperasi($id, $nama, $jenis, $alamat, $no_telepon, $deskripsi);
			return Redirect::to('admin/koperasi');
		}
	}

	public function deleteKoperasi($id)
	{
		Koperasi::deleteKoperasi($id);
		return Redirect::to('admin/koperasi');
	}

}

<?php

class LaporanController extends BaseController {

	public function showLaporan()
	{
		$laporan=Laporan::showLaporan();
		return View::make('daftar-laporan')->with('laporan',$laporan);
	}
	
	public function addLaporan()
	{
		// Memvalidasi Input
		$rules = array(
			'ID_Number'			=> 'required',
		    'id_koperasi'		=> 'required',
		    'id_pengirim'		=> 'required',
		    'file' 				=> 'required',
			);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput()
		        ->with('message', 'Laporan baru tidak berhasil ditambahkan');
		} else {
			$id_pendiri=Input::get('ID_Number');
			$id_koperasi=Input::get('id_koperasi');
			$id_pengirim=Input::get('id_pengirim');
			$file=Input::get('file');

			Laporan::createLaporan($id_koperasi, $id_pengirim, $file);
			return Redirect::back()
	        	->with('message','Laporan berhasil dikirimkan');
		}

	}

	public function editLaporan()
	{
		// Memvalidasi Input
		$rules = array(
		    'id_koperasi' 		=> 'required',
		    'id_pengirim' 		=> 'required',
		    'file'				=> 'required',
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

	public function deleteLaporan($id)
	{
		Laporan::deleteLaporan($id);
		return Redirect::back()
			->with('message', 'Laporan berhasil dihapus');
	}

}

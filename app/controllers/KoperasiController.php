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
		$id_pendiri=Input::get('id_pendiri');
		$nama=Input::get('nama');
		$jenis=Input::get('jenis_koperasi');
		$alamat=Input::get('alamat');
		$no_telepon=Input::get('no_telepon');
		$deskripsi=Input::get('deskripsi');

		Koperasi::createKoperasi($id_pendiri, $nama, $jenis, $alamat, $no_telepon, $deskripsi);
		$koperasi=Koperasi::showKoperasi();
		return View::make('manajemen-koperasi')->with('koperasi',$koperasi);
	}


}

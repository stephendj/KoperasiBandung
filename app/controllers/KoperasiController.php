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


	public function createKoperasi()
	{
		$name="Koperasi jaya";
		Koperasi::createKoperasi($name);
		return View::make('daftar-koperasi')->with('koperasi',$koperasi);
	}

}

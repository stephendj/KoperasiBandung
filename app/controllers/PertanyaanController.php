<?php

class PertanyaanController extends BaseController {

	public function showPertanyaan()
	{
		$pertanyaan=Pertanyaan::showPertanyaan();
		return View::make('daftar-pertanyaan')->with('pertanyaan',$pertanyaan);
	}

	
	public function addPertanyaan()
	{
		$pertanyaan_user=Input::get('userMsg');
		$nama=Input::get('nama');
		$email=Input::get('email');

		Pertanyaan::createPertanyaan($pertanyaan_user, $nama, $email);
		return Redirect::back()->with('message','Pertanyaan telah disimpan');;
	}

	public function addJawaban ($_id){ //edit Pertanyaan
        $UpdateDetails = Pertanyaan::where('id', '=',  $_id)->firstOrFail();
        $UpdateDetails->id_staff = Input::get('id_staff');
        $UpdateDetails->jawaban = Input::get('userMsg');
        $UpdateDetails->save();
    }

	public function deletePertanyaan($id)
	{
		Pertanyaan::deletePertanyaan($id);
		return Redirect::back();
	}

}

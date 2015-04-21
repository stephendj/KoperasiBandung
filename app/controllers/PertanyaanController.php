<?php

class PertanyaanController extends BaseController {

	public function showPertanyaan()
	{
		$pertanyaan=Pertanyaan::showPertanyaan();
		return View::make('FAQ')->with('pertanyaan',$pertanyaan);
	}

	public function showPertanyaanAdmin()
	{
		$pertanyaan=Pertanyaan::showPertanyaan();
		return View::make('jawab-pertanyaan')->with('pertanyaan',$pertanyaan);
	}
	
	public function addPertanyaan()
	{
		$nama=Input::get('userName');
		$email=Input::get('inputEmail3');
		$pertanyaan_user=Input::get('userMsg');
		
		Pertanyaan::createPertanyaan($nama, $email,$pertanyaan_user);
		return Redirect::back()->with('message','Pertanyaan telah disimpan');
	}

	public function addJawaban ($_id){ //edit Pertanyaan
        $jawaban = Input::get('userMsg');
        Pertanyaan::editPertanyaan($_id, $jawaban);
        return Redirect::back() -> with('message', 'Jawaban telah disimpan');
    }

	public function deletePertanyaan($id)
	{
		Pertanyaan::deletePertanyaan($id);
		return Redirect::back();
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pertanyaan

class PertanyaanController extends Controller {

	public function showPertanyaan()
	{
		$pertanyaan=Pertanyaan::showPertanyaan();
		return view('daftar-pertanyaan', compact('pertanyaan'));
	}

	
	public function addPertanyaan()
	{
		$pertanyaan_user=Input::get('userMsg');
		$nama=Input::get('nama');
		$email=Input::get('email');

		Pertanyaan::createPertanyaan($pertanyaan_user, $nama, $email);
		return redirect()->back()->with('message','Pertanyaan telah disimpan');;
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
		return redirect()->back();
	}

	// /**
	//  * Display a listing of the resource.
	//  *
	//  * @return Response
	//  */
	// public function index()
	// {
	// 	//
	// }

	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function create()
	// {
	// 	//
	// }

	// /**
	//  * Store a newly created resource in storage.
	//  *
	//  * @return Response
	//  */
	// public function store()
	// {
	// 	//
	// }

	// /**
	//  * Display the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function show($id)
	// {
	// 	//
	// }

	// /**
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function edit($id)
	// {
	// 	//
	// }

	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function update($id)
	// {
	// 	//
	// }

	// /**
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function destroy($id)
	// {
	// 	//
	// }

}

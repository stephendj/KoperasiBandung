<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreatePertanyaanRequest;
use App\Pertanyaan;

class PertanyaanController extends Controller {

	public function showPertanyaan()
	{
		$pertanyaan=Pertanyaan::showPertanyaanUser();
		return view('FAQ', compact('pertanyaan'));
	}

	public function showPertanyaanAdmin()
	{
		$pertanyaan=Pertanyaan::showPertanyaan();
		return view('jawab-pertanyaan', compact('pertanyaan'));
	}
	
	public function addPertanyaan(CreatePertanyaanRequest $request)
	{
		$r = $request->all();

		Pertanyaan::createPertanyaan($r['pertanyaan_user'], $r['nama'], $r['email']);
		return redirect()->back()->with('message','Pertanyaan berhasil dikirimkan');
	}

	public function addJawaban ($id){ //edit Pertanyaan
        $UpdateDetails = Pertanyaan::find($id);
        $UpdateDetails->id_staff = \Auth::id();
        $UpdateDetails->jawaban = Input::get('jawaban');
        $UpdateDetails->save();

        $pertanyaan = Pertanyaan::find($id);
        $email = $pertanyaan->email;
        $nama = $pertanyaan->nama;

        Mail::send('emails.jawaban', ['pertanyaan' => $pertanyaan], function($message) use($email, $nama) {
        	$message->from('noreply@koperasibandung.co.id', 'Koperasi Bandung');
    		$message->to($email, $nama)->subject('Jawaban Anda');
        });

        return redirect()->back()->with('message','Pertanyaan telah dijawab');
    }

	public function deletePertanyaan($id)
	{
		Pertanyaan::deletePertanyaan($id);
		return redirect()->back()->with('message','Pertanyaan telah dihapus');
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

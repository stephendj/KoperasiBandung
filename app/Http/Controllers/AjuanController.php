<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ajuan;
use App\Koperasi;
use App\Http\Requests\CreateAjuanBentukRequest;
use App\Http\Requests\CreateAjuanBubarRequest;

class AjuanController extends Controller {

	private $ajuan;

	public function __construct(Ajuan $ajuan) {
		$this->ajuan = $ajuan;
	}

	public function showAjuan() {
		$ajuanbentuk = Ajuan::getAjuanBentuk();
		$ajuanbubar = Ajuan::getAjuanBubar();
		$ajuansimpanpinjam = Ajuan::getAjuanSimpanPinjam();

		return view('manajemen-ajuan', compact('ajuanbentuk'), compact('ajuansimpanpinjam'))->with('ajuanbubar', $ajuanbubar);
	}

	public function showAjuanBentuk() {
		return view('pengajuan-pembentukan');
	}

	public function showAjuanBubar() {
		$daftarkoperasi = Koperasi::all();

		return view('pengajuan-pembubaran', compact('daftarkoperasi'));
	}

	public function changeStatus($id) {
		$ajuan = Ajuan::find($id);

		if(Input::get('action') == 'Tolak Ajuan') {
			$ajuan->status = 'Ditolak';
		} else if(Input::get('action') == 'Terima Ajuan') {
			$ajuan->status = 'Diterima';
		}
		$ajuan->save();
		
		return redirect()->back()->with('message', 'Status ajuan berhasi diubah');
	}


	public function addAjuanBentuk(CreateAjuanBentukRequest $request) {
		
		$request->file('file')->move(public_path('upload/ajuan'), $request->file('file')->getClientOriginalName());
		$r = $request->except('file');
		$r['file'] = $request->file('file')->getClientOriginalName();
		$ajuan = new Ajuan;

		$ajuan->fill($r);
		$ajuan->id 			= NULL;
		$ajuan->id_staff 	= NULL;
		$ajuan->jenis_ajuan = 'Pembentukan';
		$ajuan->status 		= 'Sedang Diproses';

		$ajuan->save();		
        
        return redirect()->back()
        	->with('message','Ajuan berhasil dikirimkan');
		
	}

	public function addAjuanBubar(CreateAjuanBubarRequest $request) {
	        
		$request->file('file')->move(public_path('upload/ajuan'), $request->file('file')->getClientOriginalName());
		$r = $request->except('file');
		$r['file'] = $request->file('file')->getClientOriginalName();
		$ajuan = new Ajuan;

		$ajuan->fill($r);
		$ajuan->id 				= NULL;
		$ajuan->id_staff		= NULL;
		$ajuan->jenis_ajuan 	= 'Pembubaran';
		$ajuan->jenis_koperasi	= Koperasi::getJenisByNama(Input::get('nama_koperasi'));
		$ajuan->status 			= 'Sedang Diproses';

		$ajuan->save();		
        
        return redirect()->back()
        	->with('message','Ajuan berhasil dikirimkan');
	}

	public function deleteAjuan($id) {
		$ajuan = Ajuan::find($id);
		$ajuan->delete();

		return redirect()->back()
			->with('message', 'Ajuan berhasil dihapus');
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

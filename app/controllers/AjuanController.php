<?php

class AjuanController extends BaseController {

	public function showAjuan() {
		$ajuanbentuk = Ajuan::getAjuanBentuk();
		$ajuanbubar = Ajuan::getAjuanBubar();
		$ajuansimpanpinjam = Ajuan::getAjuanSimpanPinjam();

		return View::make('manajemen-ajuan')->with('ajuanbentuk', $ajuanbentuk)->with('ajuansimpanpinjam', $ajuansimpanpinjam)->with('ajuanbubar', $ajuanbubar);
	}

	public function showAjuanBentuk() {
		return View::make('pengajuan-pembentukan');
	}

	public function showAjuanBubar() {
		$daftarkoperasi = Koperasi::all();

		return View::make('pengajuan-pembubaran')->with('daftarkoperasi', $daftarkoperasi);
	}

	public function changeStatus($id) {
		$ajuan = Ajuan::where('id_ajuan', $id)->first();

		if(Input::get('action') == 'Tolak Ajuan') {
			$ajuan->status = 'Ditolak';
		} else if(Input::get('action') == 'Terima Ajuan') {
			$ajuan->status = 'Diterima';
		}
		$ajuan->save();
		
		return Redirect::back()->with('message', 'Status ajuan berhasi diubah');
	}


	public function addAjuanBentuk() {
		// Memvalidasi Input
		$rules = array(
			'Id_Number'	   	=> 'required',
		    'email'   		=> 'required|email',
		    'name' 			=> 'required|unique:koperasi,nama',
		    'jenis_koperasi'=> 'required',
		    'file'			=> 'required|max:2048|mimes:zip,rar'
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('ajukan-bentuk')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput();
		} else {
			$file = Input::file('file');
			$file->move('upload/ajuan', $file->getClientOriginalName());

			$ajuan = new Ajuan;
			$ajuan->id_ajuan		= NULL;
	        $ajuan->id_staff 		= NULL;
	        $ajuan->nama_koperasi   = Input::get('name');
	        $ajuan->jenis_ajuan		= 'Pembentukan';
	        $ajuan->jenis_koperasi	= Input::get('jenis_koperasi');
	        $ajuan->status 			= 'Sedang Diproses';
	        $ajuan->id_pengaju 		= Input::get('Id_Number');
	        $ajuan->email 			= Input::get('email');
	        $ajuan->file 			= $file->getClientOriginalName();

	        $ajuan->save();
	        
	        return Redirect::back()
	        	->with('message','Ajuan berhasil dikirimkan');
		}
	}

	public function addAjuanBubar() {
		// Memvalidasi Input
		$rules = array(
			'Id_Number'	   	=> 'required',
		    'email'   		=> 'required|email',
		    'nama_koperasi'	=> 'required',
		    'file'			=> 'required|max:2048|mimes:zip,rar'
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('ajukan-bubar')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput();
		} else {
			$file = Input::file('file');
			$file->move('upload/ajuan', $file->getClientOriginalName());

			$ajuan = new Ajuan;
			$ajuan->id_ajuan		= NULL;
	        $ajuan->id_staff 		= NULL;
	        $ajuan->nama_koperasi   = Input::get('nama_koperasi');
	        $ajuan->jenis_ajuan		= 'Pembubaran';
	        $ajuan->jenis_koperasi	= Koperasi::getJenisByNama(Input::get('nama_koperasi'));
	        $ajuan->status 			= 'Sedang Diproses';
	        $ajuan->id_pengaju 		= Input::get('Id_Number');
	        $ajuan->email 			= Input::get('email');
	        $ajuan->file 			= $file->getClientOriginalName();

	        $ajuan->save();
	        
	        return Redirect::back()
	        	->with('message','Ajuan berhasil dikirimkan');
		}
	}

	public function deleteAjuan($id) {
		$ajuan = Ajuan::where('id_ajuan', $id)->first();
		$ajuan->delete();

		return Redirect::back()
			->with('message', 'Ajuan berhasil dihapus');
	}
}

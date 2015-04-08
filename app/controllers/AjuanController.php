<?php

class AjuanController extends BaseController {

	public function showAjuan() {
		$ajuanbentuk = Ajuan::getAjuanBentuk();
		$ajuanbubar = Ajuan::getAjuanBubar();
		$ajuansimpanpinjam = Ajuan::getAjuanSimpanPinjam();

		return View::make('manajemen-ajuan')->with('ajuanbentuk', $ajuanbentuk)->with('ajuansimpanpinjam', $ajuansimpanpinjam)->with('ajuanbubar', $ajuanbubar);
	}

	public function changeStatus($id) {
		$ajuan = Ajuan::where('id_ajuan', $id)->first();

		if(Input::get('action') == 'Tolak Ajuan') {
			$ajuan->status = 'Ditolak';
		} else if(Input::get('action') == 'Terima Ajuan') {
			$ajuan->status = 'Diterima';
		}
		$ajuan->save();
		
		return Redirect::to('admin/ajuan');
	}

 //    public function addPaketResto() {
	// 	// Memvalidasi Input
	// 	$rules = array(
	// 		'namaresto'	   	=> 'required',
	// 	    'nama_paket'   	=> 'required|unique:paketresto',
	// 	    'deskripsi'   	=> 'required',
	// 	    'harga'			=> 'required',
	// 	    'image'			=> 'required|image|max:2048|mimes:jpeg,jpg,bmp,png,gif'
	// 	);

	// 	// run the validation rules on the inputs from the form
	// 	$validator = Validator::make(Input::all(), $rules);

	// 	// if the validator fails, redirect back to the form
	// 	if ($validator->fails()) {
	// 	    return Redirect::to('admin/orderfood/paketresto')
	// 	        ->withErrors($validator) // send back all errors to the login form
	// 	        ->withInput();
	// 	} else {
	// 		$paketresto = new PaketResto;
	// 		$paketresto->id      	 	= NULL;
	//         $paketresto->id_restoran= Input::get('namaresto');
	//         $paketresto->nama_paket   = Input::get('nama_paket');
	//         $paketresto->deskripsi	= Input::get('deskripsi');
	//         $paketresto->harga	= Input::get('harga');

	//         // Simpan user ke database
	//         $paketresto->save();
	        
	//         return Redirect::back()
	//         	->with('message','Restoran berhasil ditambahkan');
	// 	}
	// }

	// public function deletePaketResto($id) {
	// 	$paketresto = PaketResto::find($id);
	// 	$paketresto->delete();

	// 	return Redirect::back();
	// }

	// public function editPaketResto($id) {

	// }
}

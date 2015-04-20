<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Koperasi;

class KoperasiController extends Controller {

	public function showKoperasi()
	{
		$koperasi = Koperasi::showKoperasi();
		return view('daftar-koperasi', compact('koperasi'));
	}

	public function showAdminKoperasi()
	{
		$koperasi = Koperasi::showKoperasi();
		return view('manajemen-koperasi', compact('koperasi'));
	}

	
	public function addKoperasi()
	{
		// Memvalidasi Input
		$rules = array(
			'ID_Number'			=> 'required',
		    'Name' 				=> 'required|unique:koperasi,nama',
		    'jenis_koperasi'	=> 'required',
		    'Address'			=> 'required',
		    'Telephone_Number' 	=> 'required',
		    'Description'   	=> 'required'
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return redirect()->to('admin/koperasi')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput()
		        ->with('message', 'Koperasi baru tidak berhasil ditambahkan');
		} else {
			$id_pendiri=Input::get('ID_Number');
			$nama=Input::get('Name');
			$jenis=Input::get('jenis_koperasi');
			$alamat=Input::get('Address');
			$no_telepon=Input::get('Telephone_Number');
			$deskripsi=Input::get('Description');

			Koperasi::createKoperasi($id_pendiri, $nama, $jenis, $alamat, $no_telepon, $deskripsi);
			return redirect()->to('admin/koperasi');
		}
	}

	public function editKoperasi()
	{
		// Memvalidasi Input
		$rules = array(
		    'Name' 				=> 'required|unique:koperasi,nama',
		    'jenis_koperasi'	=> 'required',
		    'Address'			=> 'required',
		    'Telephone_Number' 	=> 'required',
		    'Description'   	=> 'required'
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return redirect()->to('admin/koperasi')
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
			return redirect()->to('admin/koperasi');
		}
	}

	public function deleteKoperasi($id)
	{
		Koperasi::deleteKoperasi($id);
		return redirect()->to('admin/koperasi');
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

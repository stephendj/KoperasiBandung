<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Koperasi;
use App\Http\Requests\CreateKoperasiRequest;

class KoperasiController extends Controller {

	public function showKoperasi()
	{
		$koperasi = Koperasi::showKoperasi();
		return view('daftar-koperasi', compact('koperasi'));
	}

	public function searchKoperasi(Request $request)
	{
		$koperasi = Koperasi::searchKoperasi($request['nama']);
		return view('daftar-koperasi', compact('koperasi'));
	}

	public function showAdminKoperasi()
	{
		$koperasi = Koperasi::showKoperasi();
		return view('manajemen-koperasi', compact('koperasi'));
	}

	public function showAjuanKoperasi()
	{	
		return view('tambah-koperasi')->with('id_pendiri', session('id_pendiri'))->with('nama', session('nama'))->with('jenis_koperasi', session('jenis_koperasi'));
	}

	public function addKoperasi(CreateKoperasiRequest $request)
	{
		$r = $request->all();
		Koperasi::createKoperasi($r['id_pendiri'], $r['nama'], $r['jenis_koperasi'], $r['alamat'], $r['no_telepon'], $r['deskripsi']);
		
		return redirect('admin/koperasi')->with('message', 'Koperasi berhasil ditambahkan');
	}

	public function doAjuanKoperasi(CreateKoperasiRequest $request) {
		$r = $request->all();
		Koperasi::createKoperasi($r['id_pendiri'], $r['nama'], $r['jenis_koperasi'], $r['alamat'], $r['no_telepon'], $r['deskripsi']);
		
		return redirect('admin/ajuan')->with('message', 'Koperasi berhasil ditambahkan');
	}

	public function doAjuanBubar() {
		$id = Koperasi::findIdByNama(session('nama'));

		Koperasi::deleteKoperasi($id);
		return  redirect('admin/ajuan')->with('message', 'Koperasi berhasil dibubarkan');
	}

	public function editKoperasi(CreateKoperasiRequest $request, $id)
	{
		$r = $request->all();
		Koperasi::editKoperasi($id, $r['nama'], $r['jenis_koperasi'], $r['alamat'], $r['no_telepon'], $r['deskripsi']);
		
		return redirect('admin/koperasi')->with('message', 'Koperasi berhasil diubah');
	}

	public function deleteKoperasi($id)
	{
		Koperasi::deleteKoperasi($id);
		return redirect('admin/koperasi')->with('message', 'Koperasi berhasil dihapus');
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

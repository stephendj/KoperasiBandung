<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Koperasi;
use App\Laporan;
use App\Http\Requests\CreateLaporanRequest;
use App\Http\Requests\EditLaporanRequest;

class LaporanController extends Controller {

	public function showLaporan()
	{
		$koperasi = Koperasi::showKoperasi();
		return view('unggah-audit', compact('koperasi'));
	}

	public function showLaporanAdmin()
	{
		$koperasi = Koperasi::showKoperasi(); 
		$laporan = Laporan::leftJoin('ppl_koperasi_koperasis',function($join){
			$join->on('ppl_koperasi_laporans.id_koperasi','=','ppl_koperasi_koperasis.id');
		})
		->where ('ppl_koperasi_laporans.terverifikasi','=','0')
		->select('ppl_koperasi_laporans.*', 'ppl_koperasi_koperasis.nama')
		->get();
		return view('cek-audit', compact('koperasi'),compact('laporan'));
	}

	public function addLaporan(CreateLaporanRequest $request)
	{
		$request->file('file')->move(public_path('upload/audit'), $request->file('file')->getClientOriginalName());
		$r = $request->except('file');
		$r['file'] = $request->file('file')->getClientOriginalName();

		Laporan::createLaporan($r['id_koperasi'], $r['id_pengirim'], $r['file'],$r['tahun']);

		return redirect()->back()->with('message', 'Laporan berhasil ditambahkan');
		
	}

	public function insertNilai(EditLaporanRequest $request,$id){

		$r = $request->all();
		Laporan::editLaporan($r['permodalan'], $r['kualitas_aktiva_produktif'], $r['manajemen'], $r['efisiensi'], $r['likuiditas'], $r['kemandirian_dan_pertumbuhan'], $r['jatidiri_koperasi'], $id);
		$searchlap = Laporan::find($id);
		$searchlap -> terverifikasi = 1;
		$searchlap -> save();
		$search = Koperasi::find($searchlap->id_koperasi);
		$search->penilaian = $r['permodalan']+ $r['kualitas_aktiva_produktif'] + $r['manajemen'] + $r['efisiensi'] + $r['likuiditas'] + $r['kemandirian_dan_pertumbuhan'] + $r['jatidiri_koperasi'] ;;
		$search -> save(); 
		// $laporan = Laporan::find($id);
  //       $laporan->permodalan = $r['permodalan'];
  //       $laporan->kualitas_aktiva_produktif = $kualitas_aktiva_produktif;
  //       $laporan->manajemen = $manajemen;
  //       $laporan->efisiensi = $efisiensi;
  //       $laporan->likuiditas = $likuiditas;
  //       $laporan->kemandirian_dan_pertumbuhan = $kemandirian_dan_pertumbuhan;
  //       $laporan->jatidiri_koperasi = $jatidiri_koperasi;
  //       $laporan->save();
		return redirect()->back()->with('message', 'Nilai laporan berhasil ditambahkan');

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

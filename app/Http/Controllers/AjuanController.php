<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
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

	public function showAjuanUser() {
		$ajuanbentuk = Ajuan::getAjuanBentuk();
		$ajuanbubar = Ajuan::getAjuanBubar();
		$ajuansimpanpinjam = Ajuan::getAjuanSimpanPinjam();

		return view('daftar-ajuan', compact('ajuanbentuk'), compact('ajuansimpanpinjam'))->with('ajuanbubar', $ajuanbubar);
	}

	public function showAjuanBentuk() {
		return view('pengajuan-pembentukan');
	}

	public function showAjuanBubar() {
		$daftarkoperasi = Koperasi::all();

		return view('pengajuan-pembubaran', compact('daftarkoperasi'));
	}

	public function changeStatus($id, Request $request) {
		$ajuan = Ajuan::find($id);
		$ajuanpembentukan = false;
		$ajuanpembubaran = false;

		if($ajuan->jenis_ajuan == 'Pembentukan') {
			$ajuanpembentukan = true;
		} else if($ajuan->jenis_ajuan == 'Pembubaran') {
			$ajuanpembubaran = true;
		}

		if(Input::get('action') == 'Tolak Ajuan') {
			$ajuan->status = 'Ditolak';
		} else if(Input::get('action') == 'Terima Ajuan') {
			$ajuan->status = 'Diterima';
		}
		$ajuan->save();

        $ajuan = Ajuan::find($id);
        $email = $ajuan->email;
        $nama = $ajuan->nama;
        $status = $ajuan->status;

		// Mengirim email untuk konfirmasi
		if($ajuan !== 'Sedang Diproses') {
	        Mail::send('emails.statusajuan', ['ajuan' => $ajuan], function($message) use($email, $nama, $status) {
	        	$message->from('noreply@koperasibandung.co.id', 'Koperasi Bandung');
	        	if($status === 'Diterima') {
	        		$message->to($email, $nama)->subject('Ajuan Anda Diterima');
	        	} else {
	        		$message->to($email, $nama)->subject('Ajuan Anda Ditolak');
	        	}
	        });
	    }

		if($ajuanpembentukan && Input::get('action') == 'Terima Ajuan') {
			$id_pengaju = Input::get('id_pengaju');
			$nama = Input::get('nama');
			$jenis_koperasi = Input::get('jenis_koperasi');
			return redirect('admin/ajuan/tambah-koperasi')->with('id_pendiri', $id_pengaju)->with('nama', $nama)->with('jenis_koperasi', $jenis_koperasi);
		} else if($ajuanpembubaran && Input::get('action') == 'Terima Ajuan') {
			$nama = Input::get('nama');
			return redirect('admin/ajuan/hapus-koperasi')->with('nama', $nama);
		} else {
			return redirect()->back()->with('message', 'Status ajuan berhasi diubah');
		}
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

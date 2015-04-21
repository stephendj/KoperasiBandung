<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Koperasi extends Model {

	protected $fillable = ['nama', 'jenis_koperasi', 'id_pendiri', 'alamat', 'deskripsi', 'no_telepon'];
	public $timestamps = false;

	public static function showKoperasi()
	{
		return Koperasi::all();
	}

	public static function createKoperasi($id_pendiri, $nama, $jenis, $alamat, $no_telepon, $deskripsi)
	{
		$koperasi = Koperasi::create(array( 'id_pendiri'=> $id_pendiri,
											'nama' => $nama,
											'jenis_koperasi' => $jenis, 
											'alamat' => $alamat,
											'no_telepon' => $no_telepon,
											'deskripsi' => $deskripsi,
											'penilaian' => "-" ));

	}

	public static function editKoperasi($id, $nama, $jenis, $alamat, $no_telepon, $deskripsi)
	{
		$koperasi = Koperasi::find($id);
        $koperasi->nama = $nama;
        $koperasi->jenis_koperasi = $jenis;
        $koperasi->alamat = $alamat;
        $koperasi->no_telepon = $no_telepon;
        $koperasi->deskripsi = $deskripsi;
        $koperasi->save();
	}

	public static function deleteKoperasi($id)
	{
		$koperasi=Koperasi::find($id);
        $koperasi->delete();
	}

	public static function getJenisByNama($nama_koperasi)
	{
		$koperasi = Koperasi::where('nama', $nama_koperasi)->first();
		return $koperasi->jenis_koperasi;
	}
}

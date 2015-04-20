<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model {

	protected $fillable = ['nama', 'jenis_koperasi', 'tgl_pembuatan', 'id_pendiri', 'alamat', 'deskripsi', 'no_telepon', 'penilaian'];
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
											'tgl_pembuatan' => new DateTime(),
											'alamat' => $alamat,
											'no_telepon' => $no_telepon,
											'deskripsi' => $deskripsi,
											'penilaian' => "-" ));

	}

	public static function editKoperasi($id, $nama, $jenis, $alamat, $no_telepon, $deskripsi)
	{
		$koperasi = Koperasi::where('id_koperasi', $id)->first();
        $koperasi->nama = $nama;
        $koperasi->jenis_koperasi = $jenis;
        $koperasi->alamat = $alamat;
        $koperasi->no_telepon = $no_telepon;
        $koperasi->deskripsi = $deskripsi;
        $koperasi->save();
	}

	public static function deleteKoperasi($id)
	{
		$koperasi=Koperasi::find($id)->first();
        $koperasi->delete();
	}

	public static function getJenisByNama($nama_koperasi)
	{
		$koperasi = Koperasi::where('nama', $nama_koperasi)->first();
		return $koperasi->jenis_koperasi;
	}
}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Koperasi extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'koperasi';
	protected $primaryKey = "id_koperasi";
	protected $fillable = ['id_pendiri','nama','jenis_koperasi','tgl_pembuatan','alamat','no_telepon', 'deskripsi', 'penilaian'];
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

	public static function getJenisByNama($nama_koperasi)
	{
		$koperasi = Koperasi::where('nama', $nama_koperasi)->first();

		return $koperasi->jenis_koperasi;
	}
}

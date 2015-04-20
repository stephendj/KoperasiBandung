<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model {

	protected $fillable = ['id_koperasi', 'id_pengirim', 'tgl_kirim', 'file'];
	public $timestamps = false;

	public static function showLaporan()
	{
		return Laporan::all();
	}

	public static function createLaporan($id_koperasi, $id_pengirim, $file)
	{
		$laporan = Laporan::create(array( 'id_koperasi'=> $id_koperasi,
											'id_pengirim' => $id_pengirim, 
											'tgl_kirim' => new DateTime(),
											'file' => $file ));

	}

	public static function editLaporan($id, $id_pengirim, $file)
	{
		$laporan = Laporan::where('id_laporan', $id)->first();
        $laporan->id_pengirim = $id_pengirim;
        $laporan->file = $file;
        $laporan->save();
	}
}

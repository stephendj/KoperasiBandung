<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Laporan extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'laporan';
	protected $primaryKey = "id_laporan";
	protected $fillable = ['id_koperasi','id_pengirim','tgl_kirim','file'];
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
	}

}

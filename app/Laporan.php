<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model {

	protected $fillable = ['id_koperasi', 'id_pengirim', 'file','tahun'];
	public $timestamps = false;

	public static function showLaporan()
	{
		return Laporan::all();
	}

	public static function createLaporan($id_koperasi, $id_pengirim, $file,$tahun)
	{
		$laporan = Laporan::create(array( 'id_koperasi'=> $id_koperasi,
										  'id_pengirim' => $id_pengirim, 
										  'file' => $file,
										  'tahun' => $tahun ));

	}

	public static function editLaporan($permodalan, $kualitas_aktiva_produktif, $manajemen,$efisiensi,$likuiditas,$kemandirian_dan_pertumbuhan,$jatidiri_koperasi, $id)
	{
		$laporan = Laporan::find($id);

        $laporan->permodalan = $permodalan;
        $laporan->kualitas_aktiva_produktif = $kualitas_aktiva_produktif;
        $laporan->manajemen = $manajemen;
        $laporan->efisiensi = $efisiensi;
        $laporan->likuiditas = $likuiditas;
        $laporan->kemandirian_dan_pertumbuhan = $kemandirian_dan_pertumbuhan;
        $laporan->jatidiri_koperasi = $jatidiri_koperasi;
        $laporan->terverifikasi = 1;
        $laporan->save();
	}
}

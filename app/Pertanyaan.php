<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model {

	protected $fillable = ['pertanyaan_user', 'nama', 'email'];
	public $timestamps = false;

	public static function showPertanyaanUser()
	{
		return Pertanyaan::where('jawaban','<>', 'NULL')->get();
	}

	public static function showPertanyaan()
	{
		return Pertanyaan::all();
	}

	public static function createPertanyaan($pertanyaan, $nama, $email)
	{
		$pertanyaan = Pertanyaan::create(array( 'id_staff' => NULL,
										  		'pertanyaan_user' => $pertanyaan,
										  		'jawaban' => NULL, 
										  		'nama' => $nama, 
										  		'email' => $email,));
	}

	public static function deletePertanyaan($id)
	{
		$pertanyaan = Pertanyaan::find($id);
		$pertanyaan->delete();
	}

}

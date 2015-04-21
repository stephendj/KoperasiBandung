<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pertanyaan extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pertanyaan';
	protected $primaryKey = "id_pertanyaan";
	protected $fillable = ['id_staff','nama','email','jawaban','pertanyaan_user'];
	public $timestamps = false;

	public static function showPertanyaan()
	{
		return Pertanyaan::all();
	}

	public static function createPertanyaan($nama, $email,$pertanyaan_user)
	{
		$pertanyaan = Pertanyaan::create(array( 'nama'=> $nama,
											'email' => $email, 
											'pertanyaan_user' => $pertanyaan_user));

	}

	public static function editPertanyaan($id, $jawaban)
	{
		$pertanyaan = Pertanyaan::where('id_pertanyaan', $id)->first();
        $pertanyaan->jawaban = $jawaban;
        $pertanyaan->save();
	}

	public static function editPertanyaanStaff($id, $id_staff, $jawaban)
	{
		$pertanyaan = Pertanyaan::where('id_pertanyaan', $id)->first();
        $pertanyaan->id_staff = $id_staff;
        $pertanyaan->jawaban = $jawaban;
        $pertanyaan->save();
	}


	public static function deletePertanyaan($id)
	{
		$pertanyaan=Pertanyaan::where('id_pertanyaan', $id)->first();
        $pertanyaan->delete();
	}

}

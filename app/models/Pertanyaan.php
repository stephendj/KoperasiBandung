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
	protected $fillable = ['id_staff','nama','email','jawaban','alamat','pertanyaan_user'];
	public $timestamps = false;

	public static function showPertanyaan()
	{
		return Pertanyaan::all();
	}
}

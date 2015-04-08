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

	public $timestamps = false;

	public static function showKoperasi()
	{
		return Koperasi::all();
	}

	public static function createKoperasi($name)
	{
		$koperasi = Koperasi::create(array('nama' => $name));
	}
}

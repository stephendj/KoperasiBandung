<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model {

	protected $fillable = ['id_staff', 'pertanyaan_user', 'jawaban', 'nama', 'email'];
	public $timestamps = false;

}

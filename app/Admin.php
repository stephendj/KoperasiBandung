<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

	protected $table = 'ppl_koperasi_admins';
	protected $fillable = ['username', 'password'];
	public $timestamps = false;

}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Ajuan extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ajuan';
	public $timestamps = false;
	protected $primaryKey = "id_ajuan";

	public function scopeBentuk($query)
    {
        return $query->where('jenis_ajuan', 'Pembentukan');
    }

    public function scopeBubar($query)
    {
        return $query->where('jenis_ajuan', 'Pembubaran');
    }

    public function scopeNotSimpanPinjam($query)
    {
        return $query->where('jenis_koperasi', '!=', 'Simpan Pinjam');
    }

    public function scopeSimpanPinjam($query)
    {
        return $query->where('jenis_koperasi', 'Simpan Pinjam');
    }

	public static function getAjuanBentuk() {
		$ajuan = Ajuan::bentuk()->notSimpanPinjam()->get();

		return $ajuan;
	}

	public static function getAjuanBubar() {
		$ajuan = Ajuan::bubar()->get();

		return $ajuan;
	}

	public static function getAjuanSimpanPinjam() {
		$ajuan = Ajuan::bentuk()->simpanPinjam()->get();

		return $ajuan;
	}
}

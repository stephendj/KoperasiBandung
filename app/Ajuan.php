<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajuan extends Model {

	const CREATED_AT = 'tgl_kirim';
    const UPDATED_AT = 'tgl_ubah_status';

	protected $table = 'ppl_koperasi_ajuans';
	protected $fillable = ['nama_koperasi', 'jenis_koperasi', 'id_pengaju', 'email', 'file'];
	
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

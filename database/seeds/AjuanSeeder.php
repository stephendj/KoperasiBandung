<?php

use Illuminate\Database\Seeder;
use App\Ajuan;

class AjuanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('ppl_koperasi_ajuans')->delete();
	    Ajuan::create(array(
            'id' => NULL,
        	'id_staff' => NULL,
            'nama_koperasi' => 'Koperasi Jaya Makmur',
            'jenis_ajuan' => 'Pembentukan',
            'jenis_koperasi' => 'Konsumsi',
            'status' => 'Sedang Diproses',
            'id_pengaju' => '123238212',
            'email' => 'stephendjohan@gmail.com',
            'file' => 'jayamakmur.zip'
	    ));
        Ajuan::create(array(
            'id' => NULL,
            'id_staff' => NULL,
            'nama_koperasi' => 'Koperasi Mantap Bergaya',
            'jenis_ajuan' => 'Pembentukan',
            'jenis_koperasi' => 'Simpan Pinjam',
            'status' => 'Sedang Diproses',
            'id_pengaju' => '232312333',
            'email' => 'susantigojali@gmail.com',
            'file' => 'mantapbergaya.zip'
        ));
        Ajuan::create(array(
            'id' => NULL,
            'id_staff' => NULL,
            'nama_koperasi' => 'Koperasi Sumber Jaya',
            'jenis_ajuan' => 'Pembubaran',
            'jenis_koperasi' => 'Simpan Pinjam',
            'status' => 'Sedang Diproses',
            'id_pengaju' => '123238212',
            'email' => 'ivanaclairine@gmail.com',
            'file' => 'adilseksama.zip'
        ));
	}
}

?>
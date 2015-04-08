<?php

class AjuanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('ajuan')->delete();
	    Ajuan::create(array(
            'id_ajuan' => NULL,
        	'id_staff' => NULL,
            'nama_koperasi' => 'Koperasi Jaya Makmur',
            'jenis_ajuan' => 'Pembentukan',
            'jenis_koperasi' => 'Biasa',
            'status' => 'Sedang Diproses',
            'id_pengaju' => '123238212',
            'email' => 'stephendjohan@gmail.com',
            'file' => 'jayamakmur.zip'
	    ));
        Ajuan::create(array(
            'id_ajuan' => NULL,
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
            'id_ajuan' => NULL,
            'id_staff' => NULL,
            'nama_koperasi' => 'Koperasi Adil Seksama',
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
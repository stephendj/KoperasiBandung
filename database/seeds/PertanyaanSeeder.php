<?php

use Illuminate\Database\Seeder;
use App\Pertanyaan;

class PertanyaanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('ppl_koperasi_pertanyaans')->delete();
	    Pertanyaan::create(array(
            'id' => NULL,
        	'id_staff' => NULL,
            'nama' => 'Ivana Clairine Irsan',
            'email' => 'ivana@gmail.com',
            'pertanyaan_user' => 'Kapan ada seminar tentang koperasi lagi?',
            'jawaban' => 'Ada seminar tanggal 30 Mei 2015, kami tunggu kedatangan Anda.'
	    ));
         Pertanyaan::create(array(
            'id' => NULL,
            'id_staff' => NULL,
            'nama' => 'Ayam ayam',
            'email' => 'ayam@gmail.com',
            'pertanyaan_user' => 'Kapan ada seminar tentang koperasi lagi?',
            'jawaban' => NULL
        ));
        Pertanyaan::create(array(
            'id' => NULL,
            'id_staff' => NULL,
            'nama' => 'SAPI',
            'email' => 'sapi@gmail.com',
            'pertanyaan_user' => 'lalalalala',
            'jawaban' => 'lalalala'
        ));
	}
}

?>
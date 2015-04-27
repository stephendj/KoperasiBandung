<?php

use Illuminate\Database\Seeder;
use App\Laporan;

class LaporanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('ppl_koperasi_laporans')->delete();
	    Laporan::create(array(
            'id' => NULL,
        	'id_koperasi' => 1,
            'id_pengirim' => '100000000000000',
            'tahun' => 2015,
            'file' => 'koperasisatu.zip' ,
            'permodalan' => 1,
            'kualitas_aktiva_produktif' =>1,
            'manajemen' => 1,
            'efisiensi' => 1,
            'likuiditas' => 1,
            'kemandirian_dan_pertumbuhan' => 1,
            'jatidiri_koperasi' => 1,
            'terverifikasi' => 1
	    ));
        Laporan::create(array(
            'id' => NULL,
            'id_koperasi' => 2,
            'id_pengirim' => '100000000000000',
            'tahun' => 2015,
            'file' => 'koperasidua.zip'
        ));
        Laporan::create(array(
            'id' => NULL,
            'id_koperasi' => 3,
            'id_pengirim' => '100000000000000',
            'tahun' => 2015,
            'file' => 'koperasitiga.zip'
        ));
	}
}

?>
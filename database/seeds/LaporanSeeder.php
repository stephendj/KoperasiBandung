<?php

use Illuminate\Database\Seeder;
use App\Laporan;

class LaporanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('laporans')->delete();
	    Laporan::create(array(
            'id' => NULL,
        	'id_koperasi' => 1,
            'id_pengirim' => '100000000000000',
            'file' => 'koperasisatu.zip'
	    ));
        Laporan::create(array(
            'id' => NULL,
            'id_koperasi' => 2,
            'id_pengirim' => '100000000000000',
            'file' => 'koperasidua.zip'
        ));
        Laporan::create(array(
            'id' => NULL,
            'id_koperasi' => 3,
            'id_pengirim' => '100000000000000',
            'file' => 'koperasitiga.zip'
        ));
	}
}

?>
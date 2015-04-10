<?php

class LaporanSeeder extends Seeder
{
	public function run()
	{
	    DB::table('laporan')->delete();
	    Laporan::create(array(
            'id_laporan' => NULL,
        	'id_koperasi' => 1,
            'id_pengirim' => 100000000000000,
            'file' => 'koperasisatu.zip'
	    ));
        Laporan::create(array(
            'id_laporan' => NULL,
            'id_koperasi' => 1,
            'id_pengirim' => 100000000000000,
            'file' => 'koperasidua.zip'
        ));
        Laporan::create(array(
            'id_laporan' => NULL,
            'id_koperasi' => 1,
            'id_pengirim' => 100000000000000,
            'file' => 'koperasitiga.zip'
        ));
	}
}

?>
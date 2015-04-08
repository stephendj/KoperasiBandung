 <?php

class KoperasiTableSeeder extends Seeder
{
	public function run()
	{
	    DB::table('koperasi')->delete();
	    Koperasi::create(array(
	        'id_koperasi' => NULL,
    		'nama' => 'Koperasi Sumber Jaya',
            'jenis_koperasi' => 'Simpan Pinjam',
            'tgl_pembuatan' => '2015-02-25 09:23:22',
            'id_pendiri' => '14512057',
    		'alamat' => 'Jln. Dago VI no 6',
            'deskripsi' => 'Koperasi ini didirikan atas inisiatif warga sekitar.',
            'no_telepon' => '(022) 62355790',
            'penilaian' => '-'
	    ));
        Koperasi::create(array(
            'id_koperasi' => NULL,
            'nama' => 'Koperasi Kasih Sejati',
            'jenis_koperasi' => 'Dagang',
            'tgl_pembuatan' => '2015-03-15 19:23:22',
            'id_pendiri' => '14553257',
            'alamat' => 'Jln. Cisitu VII no 16',
            'deskripsi' => 'Koperasi ini didirikan dengan kasih.',
            'no_telepon' => '(022) 6618822',
            'penilaian' => '8'
        ));
        Koperasi::create(array(
            'id_koperasi' => NULL,
            'nama' => 'Koperasi Murni Makmur',
            'jenis_koperasi' => 'Simpan Pinjam',
            'tgl_pembuatan' => '2015-03-25 01:23:22',
            'id_pendiri' => '55212057',
            'alamat' => 'Jln. Tubagus Dalam no 2',
            'deskripsi' => 'Koperasi ini bertujuan agar makmur.',
            'no_telepon' => '(022) 6622551',
            'penilaian' => '10'
        ));
        Koperasi::create(array(
            'id_koperasi' => NULL,
            'nama' => 'Koperasi Sumber Jaya',
            'jenis_koperasi' => 'Simpan Pinjam',
            'tgl_pembuatan' => '2015-03-28 10:23:22',
            'id_pendiri' => '99232212057',
            'alamat' => 'Jln. Dago Putih no 116',
            'deskripsi' => 'Koperasi ini terus berjaya sepanjang abad.',
            'no_telepon' => '(022) 5678190',
            'penilaian' => '-'
        ));
        Koperasi::create(array(
            'id_koperasi' => NULL,
            'nama' => 'Koperasi Maju Terus',
            'jenis_koperasi' => 'Simpan Pinjam',
            'tgl_pembuatan' => '2015-04-01 08:27:22',
            'id_pendiri' => '1624667',
            'alamat' => 'Baltos no 55',
            'deskripsi' => 'Koperasi ini agar menjadi sumber untuk semua orang.',
            'no_telepon' => '(022) 5566190',
            'penilaian' => '8.5'
        ));
      
	}
}

?>
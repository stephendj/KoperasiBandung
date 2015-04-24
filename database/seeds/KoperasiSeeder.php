 <?php

use Illuminate\Database\Seeder;
use App\Koperasi;

class KoperasiSeeder extends Seeder
{
	public function run()
	{
	    DB::table('koperasis')->delete();
	    Koperasi::create(array(
	        'id' => NULL,
    		'nama' => 'Koperasi Sumber Jaya',
            'jenis_koperasi' => 'Simpan Pinjam',
            'id_pendiri' => '14512057',
    		'alamat' => 'Jln. Dago VI no 6',
            'deskripsi' => 'Koperasi ini didirikan atas inisiatif warga sekitar.',
            'no_telepon' => '(022) 62355790',
            'penilaian' => '-'
	    ));
        Koperasi::create(array(
            'id' => NULL,
            'nama' => 'Koperasi Kasih Sejati',
            'jenis_koperasi' => 'Produksi',
            'id_pendiri' => '14553257',
            'alamat' => 'Jln. Cisitu VII no 16',
            'deskripsi' => 'Koperasi ini didirikan dengan kasih.',
            'no_telepon' => '(022) 6618822',
            'penilaian' => '8'
        ));
        Koperasi::create(array(
            'id' => NULL,
            'nama' => 'Koperasi Murni Makmur',
            'jenis_koperasi' => 'Simpan Pinjam',
            'id_pendiri' => '55212057',
            'alamat' => 'Jln. Tubagus Dalam no 2',
            'deskripsi' => 'Koperasi ini bertujuan agar makmur.',
            'no_telepon' => '(022) 6622551',
            'penilaian' => '10'
        ));
        Koperasi::create(array(
            'id' => NULL,
            'nama' => 'Koperasi Jaya Terus',
            'jenis_koperasi' => 'Simpan Pinjam',
            'id_pendiri' => '99232212057',
            'alamat' => 'Jln. Dago Putih no 116',
            'deskripsi' => 'Koperasi ini terus berjaya sepanjang abad.',
            'no_telepon' => '(022) 5678190',
            'penilaian' => '-'
        ));
        Koperasi::create(array(
            'id' => NULL,
            'nama' => 'Koperasi Maju Terus',
            'jenis_koperasi' => 'Konsumsi',
            'id_pendiri' => '1624667',
            'alamat' => 'Baltos no 55',
            'deskripsi' => 'Koperasi ini agar menjadi sumber untuk semua orang.',
            'no_telepon' => '(022) 5566190',
            'penilaian' => '8.5'
        ));
        Koperasi::create(array(
            'id' => NULL,
            'nama' => 'Koperasi Ayo Bangkit',
            'jenis_koperasi' => 'Serba Usaha',
            'id_pendiri' => '162232',
            'alamat' => 'Cengkirang no 55',
            'deskripsi' => 'Koperasi ini agar membangkitkan semangat semua orang.',
            'no_telepon' => '(022) 55224190',
            'penilaian' => '9.5'
        ));
      
	}
}

?>
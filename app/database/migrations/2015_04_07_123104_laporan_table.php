<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('Laporan');
	    Schema::create('Laporan', function($table)
	    {
	        $table->increments('id_laporan');
	        $table->unsignediInteger('id_koperasi');
	        $table->string('id_pengirim');
	        $table->dateTime('tgl_kirim');
	        $table->string('file');
	    });
	    Schema::table('Laporan', function($table)
	    {
	    	$table->foreign('id_koperasi')
				->references('id_koperasi')->on('Koperasi');
		});
	}

	public function down()
	{
	    Schema::dropIfExists('Laporan');
	}
}

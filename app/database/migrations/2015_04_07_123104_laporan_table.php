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
	        $table->string('id_pengirim');
	        $table->dateTime('tgl_kirim');
	        $table->string('file');
	    });
	}

	public function down()
	{
	    Schema::dropIfExists('Laporan');
	}

}

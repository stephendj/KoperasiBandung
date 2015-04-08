<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KoperasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('Koperasi');
	    Schema::create('Koperasi', function($table)
	    {
	        $table->increments('id_koperasi');
	        $table->string('nama');
	        $table->dateTime('tgl_pembuatan');
	        $table->string('id_pendiri');
	        $table->string('alamat');
	        $table->text('deskripsi');
	        $table->string('no_telepon');
	    });
	}

	public function down()
	{
	   Schema::dropIfExists('Koperasi');
	}

}

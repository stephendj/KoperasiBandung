<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PertanyaanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('Pertanyaan');
	    Schema::create('Pertanyaan', function($table)
	    {
	        $table->increments('id_pertanyaan');
	        $table->text('pertanyaan_user');
	        $table->text('jawaban');
	        $table->string('nama');
	        $table->string('email');
	    });
	}

	public function down()
	{
	    Schema::dropIfExists('Laporan');
	}
}

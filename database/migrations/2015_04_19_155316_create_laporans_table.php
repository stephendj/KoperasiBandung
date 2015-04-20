<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laporans', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->unsignedInteger('id_koperasi');
	        $table->string('id_pengirim');
	        $table->dateTime('tgl_kirim');
	        $table->string('file');
	    });
	    Schema::table('laporans', function($table)
	    {
	    	$table->foreign('id_koperasi')
				->references('id')->on('koperasis');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laporans');
	}

}

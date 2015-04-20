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
	        $table->unsignedInteger('id_staff')->nullable();
	        $table->text('pertanyaan_user');
	        $table->text('jawaban')->nullable();
	        $table->string('nama');
	        $table->string('email');
	    });
	    Schema::table('Pertanyaan', function($table)
	    {
	    	$table->foreign('id_staff')
				->references('id_staff')->on('Admin');
		});
	}

	public function down()
	{
	    Schema::dropIfExists('Pertanyaan');
	}
}

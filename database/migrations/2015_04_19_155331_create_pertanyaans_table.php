<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
<<<<<<< HEAD:app/database/migrations/2015_04_07_123119_pertanyaan_table.php
		Schema::dropIfExists('Pertanyaan');
	    Schema::create('Pertanyaan', function($table)
	    {
	        $table->increments('id_pertanyaan');
	        $table->unsignedInteger('id_staff')->nullable();
=======
		Schema::create('pertanyaans', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->unsignedInteger('id_staff');
>>>>>>> fc014737025972fb1950129393a4685e2a79a26f:database/migrations/2015_04_19_155331_create_pertanyaans_table.php
	        $table->text('pertanyaan_user');
	        $table->text('jawaban')->nullable();
	        $table->string('nama');
	        $table->string('email');
	    });
	    Schema::table('pertanyaans', function($table)
	    {
	    	$table->foreign('id_staff')
				->references('id')->on('admins');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pertanyaans');
	}

}

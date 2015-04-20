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
		Schema::create('pertanyaans', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->unsignedInteger('id_staff');
	        $table->text('pertanyaan_user');
	        $table->text('jawaban');
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

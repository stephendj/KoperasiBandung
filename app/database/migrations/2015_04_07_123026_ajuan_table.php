<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjuanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('Ajuan');
	    Schema::create('Ajuan', function($table)
	    {
	        $table->increments('id_ajuan');
	        $table->unsignedInteger('id_staff');
	        $table->string('Nama Koperasi');
	        $table->string('jenis_ajuan');
	        $table->string('status');
	        $table->string('id_pengaju');
	        $table->string('email');
	        $table->string('file');
	    });
	    Schema::table('Ajuan', function($table)
	    {
	    	$table->foreign('id_staff')
				->references('id_staff')->on('Admin');
		});
	}

	public function down()
	{
	   Schema::dropIfExists('Ajuan');
	}

}

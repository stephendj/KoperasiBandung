<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('Admin', function($table)
	    {
	        $table->increments('id_staff');
	        $table->string('username')->unique;
	        $table->string('password');
	    });
	}

	public function down()
	{
	    Schema::drop('Admin');
	}


}

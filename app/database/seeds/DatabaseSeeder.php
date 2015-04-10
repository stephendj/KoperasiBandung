<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('KoperasiTableSeeder');
		$this->call('AjuanSeeder');
		$this->call('LaporanSeeder');
	}

}

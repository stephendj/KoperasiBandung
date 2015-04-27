<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
	public function run()
	{
	    DB::table('ppl_koperasi_admins')->delete();
	    Admin::create(array(
            'username' => 'admin',
            'password' => Hash::make('admin')
	    ));
	}
}

?>
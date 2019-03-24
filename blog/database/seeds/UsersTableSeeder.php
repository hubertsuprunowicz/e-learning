<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = new \App\User([
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => 'admin'
		]);
		$user->save();

		$user = new \App\User([
		'name' => 'test',
		'email' => 'test@gmail.com',
		'password' => 'test'
		]);
		$user->save();

		$user = new \App\User([
			'name' => 'test01',
			'email' => 'test01@test.com',
			'password' => 'test01'
		]);
		$user->save();

		$user = new \App\User([
			'name' => 'test02',
			'email' => 'test02@test.com',
			'password' => 'test02'
		]);
		$user->save();

		$user = new \App\User([
			'name' => 'test03',
			'email' => 'test03@test.com',
			'password' => 'test03'
		]);
		$user->save();
    }
}

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
			'password' => 'admin',
			'ip' => '127.0.0.1'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname01',
			'last_name' => 'testlname01',
			'name' => 'test01',
			'email' => 'test01@test.com',
			'password' => 'test01',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48662133623,
			'ip' => '109.231.32.75'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname02',
			'last_name' => 'testlname02',
			'name' => 'test02',
			'email' => 'test02@test.com',
			'password' => 'test02',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48662133621,
			'ip' => '119.231.32.75'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname03',
			'last_name' => 'testlname03',
			'name' => 'test3',
			'email' => 'test03@test.com',
			'password' => 'test03',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48632133623,
			'ip' => '109.231.32.35'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname04',
			'last_name' => 'testlname04',
			'name' => 'test04',
			'email' => 'test04@test.com',
			'password' => 'test04',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48662133643,
			'ip' => '109.231.42.75'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname05',
			'last_name' => 'testlname05',
			'name' => 'test05',
			'email' => 'test05@test.com',
			'password' => 'test05',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48662555623,
			'ip' => '109.555.32.75'
		]);
		$user->save();

		$user = new \App\User([
			'first_name' => 'testfname06',
			'last_name' => 'testlname06',
			'name' => 'test06',
			'email' => 'test06@test.com',
			'password' => 'test06',
			'educational_degree' => 'PhD IT',
			'phone_number' => 48666133623,
			'ip' => '109.231.66.75'
		]);
		$user->save();

    }
}

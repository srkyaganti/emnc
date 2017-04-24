<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
		DB::table('roles')->insert([
			'name' => 'Administrator',
			'slug' => 'admin',
		]);

		$role = Sentinel::findRoleBySlug('admin');
		
		$role->permissions = [
			'admin' => true,
			'user' => true,
		];

		$role->save();

		// User
		DB::table('roles')->insert([
			'name' => 'User',
			'slug' => 'user',
		]);

		$role = Sentinel::findRoleBySlug('user');
		$role->permissions = [
		];
		$role->save();
		
	}
}

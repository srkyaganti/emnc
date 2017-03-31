<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credentials = [
		    'email'    => 'admin@emnc.com',
		    'password' => 'password',
        ];

        $user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleBySlug('admin');
        $user->roles()->attach($role);
    }
}

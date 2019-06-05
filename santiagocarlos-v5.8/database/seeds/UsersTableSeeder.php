<?php

use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();

        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' => 'all-access'
        ]);
    }
}

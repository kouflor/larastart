<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Webmaster
        User::create([
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password')
        ]);
    }
}

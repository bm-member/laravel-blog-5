<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}

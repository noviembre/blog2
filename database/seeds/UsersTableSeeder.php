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
        App\User::create([
            'name' => 'Manu',
            'email' => 'a@ya.com',
            'password' => bcrypt('123456')
        ]);
    }
}

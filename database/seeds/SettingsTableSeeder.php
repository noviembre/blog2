<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravels Blog",
            'address' => 'Lima - a 20',
            'contact_number' => '1 200 1452 012',
            'contact_email' => 'info@laravel.com',
        ]);
    }
}

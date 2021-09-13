<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableDataSeeder::class);
        $this->call(PinogyApisTableSeeder::class);
        $this->call(ZohoTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PageSeeder::class);
    }
}

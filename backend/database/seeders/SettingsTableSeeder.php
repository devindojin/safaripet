<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'name' => 'show_price',
                'status' => true
            ],
            [
                'name' => 'show_testimonial',
                'status' => true
            ],
        ]);
    }
}

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

        Setting::whereNotNull('status')->delete();
        
        Setting::insert([
            [
                'name' => 'show_price',
                'status' => true,
                'token'=>'test'
            ],
            [
                'name' => 'show_testimonial',
                'status' => true,
                'token'=>'test'
            ],
            [
                'name' => 'instagram_feed',
                'status' => true,
                'token'=>'IGQVJXYlB6amVKVVZASZAjNwUEk0blI2dFp0SVotTUJxVmdnV0xROEhaZAU50U2V3ZAV9kN29DZAVZAjQXZAYTE5aeVpEYm5NcG5CaU5KM19oTzVtbjB2R3VjS1gyTTZAkWk84OUVqR2R0Y1J4N2JOSEhXdVlJRAZDZD

'
            ],
        ]);
    }
}

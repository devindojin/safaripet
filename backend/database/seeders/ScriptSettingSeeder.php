<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScriptSetting;

class ScriptSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkExit = ScriptSetting::first();
        
        if ($checkExit !=null) {
            
            $checkExit->delete();

        }

        ScriptSetting::insert([
            [
                'header_display' => 'text',
                'body_display' => 'text',
                'footer_display' => 'text',
                'header_display_status' => 2,
                'body_display_status' => 2,
                'footer_display_status' => 2,
            ]
        ]);
    }
}

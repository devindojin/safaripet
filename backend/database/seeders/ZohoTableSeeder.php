<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zoho;

class ZohoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zoho::create([
            'access_token' => '111-222-333',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s", strtotime('-1 hours', time()))
        ]);
    }
}

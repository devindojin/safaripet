<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PinogyApi;

class PinogyApisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PinogyApi::create([
            'endurl'=>'https://api-corepos-v1.pinogy.com',
            'accskey'=>'M8cPXGWkzQp9bNBC6GJb',
            'srckey'=>'Zbkq5stHrzZJc5WVBGwp',
            'pwdkey'=>'ka83jf466',
            'apikey'=>'3'
        ]);
    }
}

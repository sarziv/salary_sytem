<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            'city_name' => 'Kaunas',
            'city_code' => '11155',
            'base_cof' => '1.6',
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Vilnius',
            'city_code' => '964555',
            'base_cof' => '2.6',
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Alytus',
            'city_code' => '1785445',
            'base_cof' => '2.4',
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Utena',
            'city_code' => '55155',
            'base_cof' => '1.9',
        ]);
    }
}

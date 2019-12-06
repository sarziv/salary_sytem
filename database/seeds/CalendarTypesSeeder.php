<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CalendarTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars_types')->insert([
            'type' => 'Work'
        ]);
        DB::table('calendars_types')->insert([
            'type' => 'Half-Off'
        ]);
        DB::table('calendars_types')->insert([
            'type' => 'OverTime'
        ]);
        DB::table('calendars_types')->insert([
            'type' => 'Free day'
        ]);
        DB::table('calendars_types')->insert([
            'type' => 'Without Pay'
        ]);
    }
}

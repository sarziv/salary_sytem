<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_types')->insert([
            'type' => 'Java developer'

        ]);
        DB::table('work_types')->insert([
            'type' => 'Cookie developer'

        ]);
        DB::table('work_types')->insert([
            'type' => 'CSS integrated system developer'
        ]);
        DB::table('work_types')->insert([
            'type' => 'Laravel developer'

        ]);
    }
}

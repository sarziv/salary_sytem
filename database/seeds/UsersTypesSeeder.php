<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_types')->insert([
            'type'=>'user']);
        DB::table('users_types')->insert([
            'type'=>'admin']);
        DB::table('users_types')->insert([
            'type'=>'accountant']);
    }
}

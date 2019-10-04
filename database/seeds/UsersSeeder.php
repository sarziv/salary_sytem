<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'user',
            'email'=> 'user@user.com',
            'password'=> '$2y$10$Xs2kW7SEg0LoAWpNGN4A8.illUXYRfiE8tTjolCh7ghJGyMj/HkFW',
            'type'=>'user',
            'birthday'=>'1999-12-12'
        ]);
        DB::table('users')->insert([
            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=> '$2y$10$Xs2kW7SEg0LoAWpNGN4A8.illUXYRfiE8tTjolCh7ghJGyMj/HkFW',
            'type'=>'admin',
            'birthday'=>'1999-12-12'
        ]);
        DB::table('users')->insert([
            'name'=> 'accountant',
            'email'=> 'accountant@accountant.com',
            'password'=> '$2y$10$Xs2kW7SEg0LoAWpNGN4A8.illUXYRfiE8tTjolCh7ghJGyMj/HkFW',
            'type'=>'accountant',
            'birthday'=>'1999-12-12'
        ]);
    }
}

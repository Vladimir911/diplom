<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


public function run()
{
    DB::table('users')->insert([
        [
            'name' => 'admin',
            'first_name' => 'Admin',
            'email' => 'admonone@tut.by',
            'password' => '456789',
            'date_of_birth'=> '1931.12.01',
            'sex'=>'1',

        ],
    ]);
}
}
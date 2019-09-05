<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => str_random(10).'@god.damn',
            'password' => str_random(10),
            'role' => 1,
            'picture_id' => 0,
        ]);
        DB::table('users')->insert([
            'email' => str_random(10).'@god.damn',
            'password' => str_random(10),
            'role' => 2,
            'picture_id' => 0,
        ]);
    }
}
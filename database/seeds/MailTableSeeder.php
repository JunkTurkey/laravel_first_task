<?php

use Illuminate\Database\Seeder;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mails')->insert([
            'mail' => str_random(16),
            'user_id' => 1,
        ]);
        DB::table('mails')->insert([
            'mail' => str_random(16),
            'user_id' => 2,
        ]);
    }
}

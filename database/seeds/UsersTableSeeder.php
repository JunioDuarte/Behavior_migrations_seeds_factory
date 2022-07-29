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
        DB::table('users')->inset([
            'name' => str_random(10),
            'email' => str_random(10) . '@laraveldeveloper.com.br',
            'password' => bcrypt('demo')
        ]);
    }
}

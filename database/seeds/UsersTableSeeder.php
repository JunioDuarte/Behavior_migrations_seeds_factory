<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@laraveldeveloper.com.br',
            'password' => bcrypt('demo')
        ]);
    }
}

<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Latern Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'type' => 'admin',
        ]);
    }
}

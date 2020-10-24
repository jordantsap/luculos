<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kiroupanos',
            'email' => 'kiroupanos@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('DeuampeiwPote'),
        ]);

        DB::table('users')->insert([
            'name' => 'jordantsap',
            'email' => 'jordantsap@hotmail.gr',
            'email_verified_at' => now(),
            'password' => Hash::make('.1Deuampeiw.2'),
        ]);
    }
}

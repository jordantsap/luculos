<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->call([
          UserSeeder::class,
          CategorySeeder::class,
          PageSeeder::class,
          TypeSeeder::class,
          ProductSeeder::class,
          // CategoryProductSeeder::class,
          // \App\Models\User::factory(10)->create();
      ]);

        // \App\Models\User::factory(10)->create();
    }
}

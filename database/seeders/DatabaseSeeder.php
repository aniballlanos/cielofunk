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
            ColorsSeeder::class,
            GenresSeeder::class,
            InkLevelSeeder::class,
            StoreSeeder::class,
            OptionSeeder::class,
            DesignSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class InkLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ink_levels')->insert($this->inkLevels);
    }

    private $inkLevels = [
        ['name' => 'Muy Baja'],
        ['name' => 'Baja'],
        ['name' => 'Media'],
        ['name' => 'Alta'],
        ['name' => 'Muy Alta'],
        ['name' => 'No Aplica'],
    ];
}

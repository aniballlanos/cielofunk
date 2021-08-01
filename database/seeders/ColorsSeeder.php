<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert($this->colors);
    }

    private $colors = [
        ['code' => 'b', 'hex' => 'ffffff', 'name' => 'blanco'],         // 1
        ['code' => 'n', 'hex' => '000000', 'name' => 'negro'],          // 2
        ['code' => 'r', 'hex' => 'a83232', 'name' => 'rojo'],           // 3
        ['code' => 'az', 'hex' => '3240a8', 'name' => 'azul'],          // 4
        ['code' => 'g', 'hex' => 'bababa', 'name' => 'gris'],           // 5
        ['code' => 'v', 'hex' => '32a852', 'name' => 'verde'],          // 6
        ['code' => 'am', 'hex' => 'faf039', 'name' => 'amarillo'],      // 7
        ['code' => 'ar', 'hex' => 'd9c38d', 'name' => 'arena'],         // 8
        ['code' => 'mg', 'hex' => '7de8b4', 'name' => 'verde menta'],   // 9
        ['code' => 'c', 'hex' => '81f7f5', 'name' => 'celeste'],        // 10
        ['code' => 'azm', 'hex' => '151b59', 'name' => 'azul marino'],  // 11
    ];

}

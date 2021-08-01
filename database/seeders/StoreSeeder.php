<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert($this->stores);
    }

    private $stores = [
        ['name' => 'abominatron'],
        ['name' => 'poleradicto'],
    ];
}

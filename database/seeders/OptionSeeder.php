<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert($this->options);
    }

    private $options = [
        ['key' => 'ink_price_380cc', 'value' => '240', 'type' => 'int', 'derivated' => false],
        ['key' => 'dollar_exchange_rate', 'value' => '690', 'type' => 'int', 'derivated' => false],
        ['key' => 'ink_cost_cc', 'value' => '622', 'type' => 'int', 'derivated' => true],
        ['key' => 'product_cost', 'value' => '1500', 'type' => 'int', 'derivated' => false],
        ['key' => 'hh_cost_side', 'value' => '1300', 'type' => 'int', 'derivated' => false],
    ];
}

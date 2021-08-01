<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert($this->genres);
    }

    private $genres = [
        ['name' => 'Death Metal / Grindcore'],
        ['name' => 'Black Metal / Folk'],
        ['name' => 'Thrash Metal / Crossover'],
        ['name' => 'Heavy Metal / Doom'],
        ['name' => 'Punk / Hardcore'],
        ['name' => 'Rock Clásico / Progresivo'],
        ['name' => 'Rock Alternativo / Nu Metal'],
        ['name' => 'New Wave / Pop'],
        ['name' => 'Peliculas / Series'],
        ['name' => 'Juegos'],
        ['name' => 'Personajes'],
        ['name' => 'Otros'],
        ['name' => 'Comics / Cartoons'],
    ];
}

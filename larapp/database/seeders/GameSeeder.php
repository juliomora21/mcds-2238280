<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creacion de semilla de Metodo Insert...
        DB::table('games')->insert([
        	'name'        => "Luigi's Mansion 3",
        	'description' => "Luigi's Mansion 3 es un video juego de accion aventura",
        	'user_id'     => 1,
        	'category_id' => 1,
        	'slider'      => 1,
        	'price'       => 59,
        ]);

        // Creacion de semilla con metodo ORM
        $gm = new Game;
        $gm->name        = 'Halo Infinite';
        $gm->description = 'Halo Infinite es un juego de dispararar en primera persona';
        $gm->user_id     = 1;
        $gm->category_id = 2;
        $gm->slider      = 0;
        $gm->price       = 49;
        $gm->save();

        // Creacion de semilla con metodo ORM
        $gm = new Game;
        $gm->name        = "Demon's Souls";
        $gm->description = "Demon's Souls es un videojuego de rol de acción en tercera persona";
        $gm->user_id     = 1;
        $gm->category_id = 3;
        $gm->slider      = 0;
        $gm->price       = 79;
        $gm->save();
    }
}

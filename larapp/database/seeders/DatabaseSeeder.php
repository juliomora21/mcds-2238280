<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Game;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 
        $this->call([
        	UserSeeder::class,
        	CategorySeeder::class,
        	GameSeeder::class,
        ]);

        \App\Models\User::factory(200)->create();

    }
}

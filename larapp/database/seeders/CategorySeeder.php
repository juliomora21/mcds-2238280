<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creacion de semilla de Metodo Insert...
        DB::table('categories')->insert([
        	'name'        => 'Nintendo Switch',
        	'description' => 'Lorem ipsun dolor sit amot',
        ]);

        // Creacion de semilla con metodo ORM
        $cat = new Category;
        $cat->name        = 'Xbox Series X';
        $cat->description = 'Lorem ipsun dolor sit amot';
        $cat->save();

		$cat = new Category;
        $cat->name        = 'Play Station 5';
        $cat->description = 'Lorem ipsun dolor sit amot';
        $cat->save();
	}
}

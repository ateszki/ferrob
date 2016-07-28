<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder
{

	public function run(){

		DB::table('categorias')->insert([
			["nombre"=>"Esmaltes","picto"=>"picto-esmalte"],["nombre"=>"Convertidores","picto"=>"picto-convert"],["nombre"=>"Antióxidos y Complementos","picto"=>"picto-antiox"]
			]);
	}
}
class ProductoTableSeeder extends Seeder
{
	public function run(){

		DB::table('productos')->insert([
			[
				"categoria_id"=>1,
				"nombre"=>"DUO EXPRESS ESMALTE CONVERTIDOR",
				"descripcion"=>"Brillante. Secado Ultra Rápido -Todo Metal",
			],
			[
				"categoria_id"=>1,
				"nombre"=>"DUO CLASSIC ESMALTE CONVERTIDOR",
				"descripcion"=>"Esmalte convertidor de óxido para metales.",
			],
			[
				"categoria_id"=>1,
				"nombre"=>"DUO EFECTOS ESPECIALES",
				"descripcion"=>"Para metales",
			],
			[
				"categoria_id"=>2,
				"nombre"=>"CONVERTIDOR DE OXIDO FERRO BET",
				"descripcion"=>"Para metales",
			],
			[
				"categoria_id"=>2,
				"nombre"=>"FERRO BET FONDO",
				"descripcion"=>"Para galvanizado y aluminio.",
			],
			[
				"categoria_id"=>3,
				"nombre"=>"ANTIOXIDO FERROBET",
				"descripcion"=>"Fondo para superficies ferrosas",
			],
			[
				"categoria_id"=>3,
				"nombre"=>"FERRO BET DESOXIDANTE",
				"descripcion"=>"Desoxidante y fosfatizante para metales.",
			],
			[
				"categoria_id"=>3,
				"nombre"=>"DILUYENTE DUO EXPRESS",
				"descripcion"=>"Para diluir esmalte convertidor duo express",
			],

		]);
	}

}



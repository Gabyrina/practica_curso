<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Samsung 54',
            'precio' => '2000',
            'stock' => '50'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 2,
            'nombre' => 'Lenovo',
            'precio' => '1800',
            'stock' => '9'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 3,
            'nombre' => 'Toshiba',
            'precio' => '800',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 4,
            'nombre' => 'Samsung 14',
            'precio' => '200',
            'stock' => '30'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Epson 325',
            'precio' => '1200',
            'stock' => '13'
        ]);
    }
}

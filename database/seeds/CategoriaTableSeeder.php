<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Televisores',
            'descripcion' => 'Descripcion televisores'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Computadoras',
            'descripcion' => 'Descripcion computadoras'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Laptops',
            'descripcion' => 'Descripcion laptops'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Tablet',
            'descripcion' => 'Descripcion tablet'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'scanner',
            'descripcion' => 'Descripcion scanner'
        ]);
    }
}

<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Gabriela',
            'apellido' => 'Gonzales',
            'direccion' => 'Sacaba',
            'fecha_nacimiento' => '1970-07-16',
            'telefono' => '73752413',
            'email' => 'ggconzales@mail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Carmen',
            'apellido' => 'Cortes Arias',
            'direccion' => 'Calle España',
            'fecha_nacimiento' => '2005-08-18',
            'telefono' => '60764737',
            'email' => 'carmenca@mail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Cristian',
            'apellido' => 'Pujol Cano',
            'direccion' => 'Av. Santa Cruz',
            'fecha_nacimiento' => '2081-06-11',
            'telefono' => '77841524',
            'email' => 'cristianpc@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'David',
            'apellido' => 'Roig Campos',
            'direccion' => 'Calle Antezana',
            'fecha_nacimiento' => '1990-10-27',
            'telefono' => '74938552',
            'email' => 'davidrc@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Fernando',
            'apellido' => 'Fernandez Mora',
            'direccion' => 'Calle Santibañes',
            'fecha_nacimiento' => '1982-12-10',
            'telefono' => '77841537',
            'email' => 'fernandofm@mail.com'
        ]);
    }
}

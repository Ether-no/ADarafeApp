<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('direcciones')->insert([
            'user_id' => '1',
            'nombre' => 'Name 1',
            'apellidos' => 'Last Name 2',
            'calle' => 'Street 1',
            'colonia' => 'Colony 1',
            'municipio' => 'Municipio 1',
            'ciudad' => 'Toluca',
            'estado' => "Estado de Mexico",
            'cp' => '50230',
            'telefono' => '(722) 2347561',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('direcciones')->insert([
            'user_id' => '2',
            'nombre' => 'Name 2',
            'apellidos' => 'Last Name 2',
            'calle' => 'Street 2',
            'colonia' => 'Colony 2',
            'municipio' => 'Municipio 2',
            'ciudad' => 'CDMex',
            'estado' => 'CDMex',
            'cp' => '50340',
            'telefono' => '(722) 2347561',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

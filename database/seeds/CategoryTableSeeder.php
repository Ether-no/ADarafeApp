<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria' => 'Damas',
            'slug' => 'damas',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Caballeros',
            'slug' => 'caballeros',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Anillos',
            'slug' => 'anillos',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Gargantillas',
            'slug' => 'gargantillas',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Diamantes',
            'slug' => 'diamantes',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Medallas',
            'slug' => 'medallas',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Pulceras',
            'slug' => 'pulceras',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Cadenas',
            'slug' => 'cadenas',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Argollas',
            'slug' => 'argollas',
            'activo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

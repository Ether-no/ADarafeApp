<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '3',
                'nombre' => 'Damas',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '3',
                'nombre' => 'Caballeros',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '6',
                'nombre' => 'Religioso',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '6',
                'nombre' => 'Adulto',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '6',
                'nombre' => 'Niño',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '6',
                'nombre' => 'Adulto',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '7',
                'nombre' => 'Damas',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '7',
                'nombre' => 'Caballeros',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '8',
                'nombre' => 'Damas',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '8',
                'nombre' => 'Caballeros',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            DB::table('subcategorias')->insert([
                'id_cat' => '9',
                'nombre' => 'Damas',
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

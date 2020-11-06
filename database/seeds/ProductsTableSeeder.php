<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 1',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/0ORNyu6uXklYKYcMkQgFVsVTYtqEIvwMkxaW0hpx.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 0,
            'kilataje' => '10k',
            'precio' => 12323,
            'id_cat' => 1,
            'id_subcategoria' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 2',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/5R66KWcR50G7MK2XDrU3eKNGGgM23JkJ9AeHMr8i.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 1,
            'kilataje' => '10k',
            'precio' => 12323,
            'id_cat' => 2,
            'id_subcategoria' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 3',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/6sbj406aIQnuW4iAmNIkOx4gZTUwotT4CxB1kp7B.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 0,
            'kilataje' => '10k',
            'precio' => 12323,
            'id_cat' => 3,
            'id_subcategoria' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 4',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/7lNgzdCylnAOQxv7Duq6e8pnypfcaMKKgPW4doMU.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 1,
            'kilataje' => '14k',
            'precio' => 12323,
            'id_cat' => 4,
            'id_subcategoria' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 5',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/CGg88GCENd73SVL2uscGqLrJq6dbRIF6KGe5IMIG.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 0,
            'kilataje' => '14k',
            'precio' => 12323,
            'id_cat' => 5,
            'id_subcategoria' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 6',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/D3UkW2JdUiHnRlloFx0QTI2ooAFFBr8vHiXZbAeg.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 1,
            'kilataje' => '14k',
            'precio' => 12323,
            'id_cat' => 6,
            'id_subcategoria' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 7',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/HqekC0vxPldYBES02wAUCGxY8aCupDjy1WA3rVcB.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 0,
            'kilataje' => '18k',
            'precio' => 12323,
            'id_cat' => 7,
            'id_subcategoria' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 8',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/MsMmVFt2T7Tg3dEdgjmyHGRPYEndGTNjZ0JveKSh.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 1,
            'kilataje' => '18k',
            'precio' => 12323,
            'id_cat' => 8,
            'id_subcategoria' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 9',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/oiymrIQa9YNLQ0dZ4entsFzd0cXoNwuvKNtD0kmR.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 0,
            'kilataje' => '18k',
            'precio' => 12323,
            'id_cat' => 9,
            'id_subcategoria' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('productos')->insert([
            'producto' => 'Producto 10',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'RFC' => 'G9uDa5BgQFnakVLF',
            'material' => 'Oro Amarillo',
            'Foto' => 'uploads/UJzwPKVbNSbzTn0rJjPtHRh6sqWTTIyF5hmpBlfv.png',
            'descuento' => '0',
            'activo' => 1,
            'destacado' => 1,
            'kilataje' => '10k',
            'precio' => 12323,
            'id_cat' => 1,
            'id_subcategoria' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin.admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'apellidos' => 'user',
            'email' => 'user.user@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

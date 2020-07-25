<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'proveedor@gmail.com',
            'type' => 'proveedor',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'almacen@gmail.com',
            'type' => 'almacen',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'cliente@gmail.com',
            'type' => 'cliente',
            'password' => Hash::make('123456'),
        ]);
    }
}

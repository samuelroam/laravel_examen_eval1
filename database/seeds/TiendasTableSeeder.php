<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
            'name' => Str::random(10),
            'descripcion' => Str::random(50),
            'password' => bcrypt('password'),
            'emaill' => Str::random(20).'@gmail.com',
            'likes' => '69',
        ]);
    }
}

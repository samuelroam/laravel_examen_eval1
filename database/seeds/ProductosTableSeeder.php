<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i>10;$i++){
        DB::table('productos')->insert([
            'name' => Str::random(10),
            'descripcion' => Str::random(50),
            'stock' => '6972',
            'price' => '6,9'

        ]);
        }
    }
}

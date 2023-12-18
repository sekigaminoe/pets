<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->truncate();
        DB::table('carts')->insert([
            'id' => 1,
            'item_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('carts')->insert([
            'id' => 2,
            'item_id' => 2,
            'user_id' => 2,
        ]);
    }
}

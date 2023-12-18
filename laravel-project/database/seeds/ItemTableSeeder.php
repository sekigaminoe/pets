<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();
        DB::table('items')->insert([
            'name' => 'ジャーキー',
            'detail' => '犬用ジャーキーです',
            'fee' => 500,
            'imgpath' => 'pet_food1.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'おいしいおやつ',
            'detail' => '犬用のおやつです',
            'fee' => 500,
            'imgpath' => 'pet_food2.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'ひまわりの種',
            'detail' => 'ハムスターの餌です',
            'fee' => 600,
            'imgpath' => 'pet_food3.jpg',
        ]);

        DB::table('items')->insert([
            'name' => '猫のごはん',
            'detail' => '猫用の餌です',
            'fee' => 1500,
            'imgpath' => 'pet_food4.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'カラフルフード',
            'detail' => '色が綺麗なドックフードです',
            'fee' => 1500,
            'imgpath' => 'pet_food5.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'ガム',
            'detail' => 'おやつにどうぞ',
            'fee' => 500,
            'imgpath' => 'pet_food6.jpg',
        ]);
        
    }
}

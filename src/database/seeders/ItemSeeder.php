<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'id' => 1,
            'brand_id' => '1',
            'category_id' => '1',
            'name' => '商品1',
            'description' => 'ブランドAカテゴリA',
            'price'=> '1000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 2,
            'brand_id' => '1',
            'category_id' => '2',
            'name' => '商品2',
            'description' => 'ブランドAカテゴリB',
            'price'=> '2000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 3,
            'brand_id' => '1',
            'category_id' => '3',
            'name' => '商品3',
            'description' => 'ブランドAカテゴリC',
            'price'=> '3000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 4,
            'brand_id' => '1',
            'category_id' => '1',
            'name' => '商品4',
            'description' => 'ブランドAカテゴリD',
            'price'=> '4000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 5,
            'brand_id' => '1',
            'category_id' => '1',
            'name' => '商品5',
            'description' => 'ブランドAカテゴリE',
            'price'=> '5000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 6,
            'brand_id' => '2',
            'category_id' => '1',
            'name' => '商品6',
            'description' => 'ブランドBカテゴリA',
            'price'=> '6000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 7,
            'brand_id' => '3',
            'category_id' => '2',
            'name' => '商品7',
            'description' => 'ブランドCカテゴリB',
            'price'=> '7000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
        Item::create([
            'id' => 8,
            'brand_id' => '4',
            'category_id' => '3',
            'name' => '商品8',
            'description' => 'ブランドDカテゴリC',
            'price'=> '8000',
            'image_1' => '#',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'category_name' => 'カテゴリA',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Category::create([
            'id' => 2,
            'category_name' => 'カテゴリB',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Category::create([
            'id' => 3,
            'category_name' => 'カテゴリC',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Category::create([
            'id' => 4,
            'category_name' => 'カテゴリD',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Category::create([
            'id' => 5,
            'category_name' => 'カテゴリE',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
    }
}

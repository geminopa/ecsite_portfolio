<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'id' => 1,
            'name' => 'ブランドA',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Brand::create([
            'id' => 2,
            'name' => 'ブランドB',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Brand::create([
            'id' => 3,
            'name' => 'ブランドC',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Brand::create([
            'id' => 4,
            'name' => 'ブランドD',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        Brand::create([
            'id' => 5,
            'name' => 'ブランドE',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
    }
}

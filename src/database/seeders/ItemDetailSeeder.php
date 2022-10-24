<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemDetail;

class ItemDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemDetail::create([
            'id' => 1,
            'item_id' => '1',
            'color' => 'white',
            'size' => 'S',
            'total_amount' => '3',
            'sales_amount'=> '0',
            'stock' => '3',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        ItemDetail::create([
            'id' => 2,
            'item_id' => '1',
            'color' => 'white',
            'size' => 'M',
            'total_amount' => '3',
            'sales_amount'=> '0',
            'stock' => '3',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        ItemDetail::create([
            'id' => 3,
            'item_id' => '1',
            'color' => 'white',
            'size' => 'L',
            'total_amount' => '3',
            'sales_amount'=> '3',
            'stock' => '0',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        ItemDetail::create([
            'id' => 4,
            'item_id' => '1',
            'color' => 'black',
            'size' => 'S',
            'total_amount' => '3',
            'sales_amount'=> '1',
            'stock' => '2',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        ItemDetail::create([
            'id' => 5,
            'item_id' => '1',
            'color' => 'black',
            'size' => 'M',
            'total_amount' => '3',
            'sales_amount'=> '2',
            'stock' => '1',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
        ItemDetail::create([
            'id' => 6,
            'item_id' => '1',
            'color' => 'black',
            'size' => 'L',
            'total_amount' => '3',
            'sales_amount'=> '3',
            'stock' => '0',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
        ]);
    }
}

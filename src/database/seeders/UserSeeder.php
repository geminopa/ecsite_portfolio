<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => '宮下　絃詩',
            'email' => 'genshi0302@yahoo.co.jp',
            'password' => Hash::make('qwerty'),
            'post_code' => '0000000',
            'prefecture'=> '北海道',
            'city' => '札幌市',
            'address' => '南区',
            'tel' => '080-1234-5678',
            'created_at' => '2022-10-20 00:00:00',
            'updated_at' => '2022-10-20 00:00:00',
            'deleted_at' => '2022-10-20 00:00:00',
        ]);
    }
}

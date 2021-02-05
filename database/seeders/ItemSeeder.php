<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_kode' => 'LG01',
            'item_name' => 'LOG Albasia',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'LG02',
            'item_name' => 'LOG Jabon',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'LG03',
            'item_name' => 'LOG Karet',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'LG04',
            'item_name' => 'LOG Meranti',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'ST01',
            'item_name' => 'STBR Albasia',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'ST02',
            'item_name' => 'STBR Jabon',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'ST03',
            'item_name' => 'STBR Karet',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'ST04',
            'item_name' => 'STBR Meranti',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'VN01',
            'item_name' => 'Veneer Albasia',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'VN02',
            'item_name' => 'Veneer Jabon',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'VN03',
            'item_name' => 'Veneer Karet',
        ]);
        DB::table('items')->insert([
            'item_kode' => 'VN04',
            'item_name' => 'Veneer Meranti',
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class ProductSupportCenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_support_center')->insert([
            'product_id' => '3',
            'support_center_id' => '1',
            'stock' => '25'
        ]);

        DB::table('product_support_center')->insert([
            'product_id' => '2',
            'support_center_id' => '1',
            'stock' => '3'
        ]);

        DB::table('product_support_center')->insert([
            'product_id' => '4',
            'support_center_id' => '3',
            'stock' => '12'
        ]);

        DB::table('product_support_center')->insert([
            'product_id' => '3',
            'support_center_id' => '2',
            'stock' => '400'
        ]);

        DB::table('product_support_center')->insert([
            'product_id' => '1',
            'support_center_id' => '2',
            'stock' => '30'
        ]);
    }
}

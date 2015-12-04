<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Strip',
            'cdiscount_id' => '120',
            'price' => '1.50',
            'type' =>'PARAMEDICAL'
        ]);

        \DB::table('products')->insert([
            'name' => 'Syringes',
            'cdiscount_id' => '235',
            'price' => '0.50',
            'type' =>'PARAMEDICAL'
        ]);

        \DB::table('products')->insert([
            'name' => 'Gloves x150',
            'cdiscount_id' => '53',
            'price' => '3.99',
            'type' =>'GEAR'
        ]);

        \DB::table('products')->insert([
            'name' => 'Morphin',
            'cdiscount_id' => '',
            'price' => '5.50',
            'type' =>'DRUG'
        ]);
    }
}

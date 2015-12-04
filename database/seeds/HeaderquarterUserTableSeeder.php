<?php

use Illuminate\Database\Seeder;

class HeaderquarterUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '2'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '4'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '1'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '2'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '3'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '4'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '5'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '3',
            'user_id' => '1'
        ]);

        DB::table('headquarter_user')->insert([
            'headquarter_id' => '3',
            'user_id' => '2'
        ]);

    }
}

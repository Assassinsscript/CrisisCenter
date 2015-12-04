<?php

use Illuminate\Database\Seeder;

class SupportCenterUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('support_center_user')->insert([
            'support_center_id' => '1',
            'user_id' => '1',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '1',
            'user_id' => '2',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '1',
            'user_id' => '3',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '1',
            'user_id' => '4',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '2',
            'user_id' => '1',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '2',
            'user_id' => '3',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '3',
            'user_id' => '2',
        ]);

        \DB::table('support_center_user')->insert([
            'support_center_id' => '4',
            'user_id' => '5',
        ]);


    }
}

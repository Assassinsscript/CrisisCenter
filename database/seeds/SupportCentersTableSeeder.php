<?php

use Illuminate\Database\Seeder;

class SupportCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('support_centers')->insert([
            'headquarter_id' => '1',
            'name' => 'Sous section rue du moulin',
            'gps_lat' => '25.5122',
            'gps_long' => '45.2136'
        ]);

        \DB::table('support_centers')->insert([
            'headquarter_id' => '1',
            'name' => 'Sous section rue des artistes',
            'gps_lat' => '22.5122',
            'gps_long' => '44.2136'
        ]);

        \DB::table('support_centers')->insert([
            'headquarter_id' => '1',
            'name' => 'Sous section rue du général de gaulle',
            'gps_lat' => '23.5122',
            'gps_long' => '45.6532'
        ]);

        \DB::table('support_centers')->insert([
            'headquarter_id' => '2',
            'name' => 'Rescue camp #1',
            'gps_lat' => '35.5122',
            'gps_long' => '12.2136'
        ]);

        \DB::table('support_centers')->insert([
            'headquarter_id' => '2',
            'name' => 'Haiti City',
            'gps_lat' => '25.5122',
            'gps_long' => '45.2136'
        ]);

        \DB::table('support_centers')->insert([
            'headquarter_id' => '3',
            'name' => 'Sub section Bull',
            'gps_lat' => '25.5122',
            'gps_long' => '35.6515'
        ]);

    }
}

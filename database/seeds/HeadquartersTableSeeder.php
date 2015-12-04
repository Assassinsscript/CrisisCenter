<?php

use Illuminate\Database\Seeder;

class HeadquartersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headquarters')->insert([
            'crisis_id' => '1',
            'name' => 'alpha center',
            'gps_lat' => '51.55615',
            'gps_long' => '21.15328'
        ]);

        DB::table('headquarters')->insert([
            'crisis_id' => '2',
            'name' => 'Haiti rescue alpha',
            'gps_lat' => '-35.161',
            'gps_long' => '21.561689'
        ]);

        DB::table('headquarters')->insert([
            'crisis_id' => '3',
            'name' => 'NYC Team Alpha',
            'gps_lat' => '06.868919',
            'gps_long' => '35.619'
        ]);

    }
}

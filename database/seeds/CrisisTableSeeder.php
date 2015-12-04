<?php

use Illuminate\Database\Seeder;

class CrisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crisis')->insert([
            'name' => 'Paris Attacks',
            'begin_date' => '2015-11-13',
            'end_date' => '2015-11-14',
            'type' => 'ATTACK',
            'location' => 'Paris']);

        DB::table('crisis')->insert([
            'name' => 'Haiti Earthquake',
            'begin_date' => '2010-01-12',
            'end_date' => '2010-02-26',
            'type' => 'NATURAL_DISASTER',
            'location' => 'Haiti']);

        DB::table('crisis')->insert([
            'name' => 'WTC Terrorism Attack',
            'begin_date' => '2001-09-11',
            'end_date' => '2001-09-12',
            'type' => 'ATTACK',
            'location' => 'New York City, Manhattan']);
    }
}

<?php

use Illuminate\Database\Seeder;

class InterventionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interventions')->insert([
            'victim_id' => '1',
            'type' => 'MEDICATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '3',
            'type' => 'MOVEMENT',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '2',
            'type' => 'MEDICATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '3',
            'type' => 'EVACUATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '3',
            'type' => 'DEATH',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '4',
            'type' => 'EVACUATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '4',
            'type' => 'TREATMENT',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '5',
            'type' => 'MOVEMENT',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '6',
            'type' => 'DEATH',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '7',
            'type' => 'EVACUATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '8',
            'type' => 'EVACUATION',
            'created_at' => date('Y-M-d H:m:s')
        ]);

        DB::table('interventions')->insert([
            'victim_id' => '8',
        'type' => 'DEATH',
            'created_at' => date('Y-M-d H:m:s')
        ]);

    }
}

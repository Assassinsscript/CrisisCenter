<?php

use Illuminate\Database\Seeder;

class VictimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('victims')->insert([
            'lastname' => 'Jean',
            'firstname' => 'Bon',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '1',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Chuck',
            'firstname' => 'Norris',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '00000',
            'city' => 'Everywhere',
            'country' => 'France',
            'phone1' => '0555555555',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '0000-00-00',
            'contraindication' => 'Too strong for you',
            'support_center_id' => '2',
            'state' => 'WAITING'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Jean',
            'firstname' => 'Bon',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '3',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Jean',
            'firstname' => 'Bon',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '4',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Jean',
            'firstname' => 'Bon',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '5',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Jean',
            'firstname' => 'Bon',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '2',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Philipe',
            'firstname' => 'Stark',
            'gender' => 'Male',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Paris',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '1',
            'state' => 'DEAD'
        ]);

        \DB::table('victims')->insert([
            'lastname' => 'Jeanne',
            'firstname' => 'Eléou',
            'gender' => 'Female',
            'address' => 'Unknown address',
            'postal_code' => '12354',
            'city' => 'Bordeaux',
            'country' => 'France',
            'phone1' => '0515622315',
            'phone2' => '0615123564',
            'blood_type' => 'O-',
            'birth_date' => '1965-12-23',
            'contraindication' => 'Sugar in blood is really high',
            'support_center_id' => '1',
            'state' => 'DEAD'
        ]);

    }
}

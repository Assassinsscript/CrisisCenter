<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'root',
            'password' => 'root',
            'email' => 'jbrenaux@gmail.com',
            'phone' => '055611234',
            'firstname' => 'Jean baptiste',
            'lastname' => 'Renaux',
            'role' => 'Admin'
        ]);

        User::create([
            'username' => 'jlroux',
            'password' => 'hidden',
            'email' => 'jlroux@hotmail.com',
            'phone' => '055165168',
            'firstname' => 'Jean Louis',
            'lastname' => 'Roux',
            'role' => 'PostChief'
        ]);

        User::create([
            'username' => 'nprigent',
            'password' => 'hidden',
            'email' => 'nprigent@gmail.com',
            'phone' => '5610156',
            'firstname' => 'Nicole',
            'lastname' => 'Prigent',
            'role' => 'PostChief'
        ]);

        User::create([
            'username' => 'mmateo',
            'password' => 'hidden',
            'email' => 'mmateo@gmail.com',
            'phone' => '156161513',
            'firstname' => 'Manu',
            'lastname' => 'Mateo',
            'role' => 'MissionChief'
        ]);

        User::create([
            'username' => 'dzqdqzdq',
            'password' => 'hidden',
            'email' => 'dqdqdq@hotmail.com',
            'phone' => '055611234',
            'firstname' => 'dzqdzqdzqdqz',
            'lastname' => 'dzqdzqdzq',
            'role' => 'MissionChief'
        ]);

        User::create([
            'username' => 'jbon',
            'password' => 'hidden',
            'email' => 'jbon@gmail.com',
            'phone' => '156156312',
            'firstname' => 'Jean',
            'lastname' => 'Bon',
            'role' => 'MissionChief'
        ]);

    }
}

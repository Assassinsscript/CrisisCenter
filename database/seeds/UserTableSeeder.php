<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'jbrenaux',
            'password' => 'hidden',
            'email' => 'jbrenaux@gmail.com',
            'phone' => '055611234',
            'firstname' => 'Jean baptiste',
            'lastname' => 'Renaux'
        ]);

        DB::table('users')->insert([
            'username' => 'jlroux',
            'password' => 'hidden',
            'email' => 'jlroux@hotmail.com',
            'phone' => '055165168',
            'firstname' => 'Jean Louis',
            'lastname' => 'Roux'
        ]);

        DB::table('users')->insert([
            'username' => 'nprigent',
            'password' => 'hidden',
            'email' => 'nprigent@gmail.com',
            'phone' => '5610156',
            'firstname' => 'Nicole',
            'lastname' => 'Prigent'
        ]);

        DB::table('users')->insert([
            'username' => 'mmateo',
            'password' => 'hidden',
            'email' => 'mmateo@gmail.com',
            'phone' => '156161513',
            'firstname' => 'Manu',
            'lastname' => 'Mateo'
        ]);

        DB::table('users')->insert([
            'username' => 'dzqdqzdq',
            'password' => 'hidden',
            'email' => 'dqdqdq@hotmail.com',
            'phone' => '055611234',
            'firstname' => 'dzqdzqdzqdqz',
            'lastname' => 'dzqdzqdzq'
        ]);

        DB::table('users')->insert([
            'username' => 'jbon',
            'password' => 'hidden',
            'email' => 'jbon@gmail.com',
            'phone' => '156156312',
            'firstname' => 'Jean',
            'lastname' => 'Bon'
        ]);

    }
}

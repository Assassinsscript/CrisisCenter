<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CrisisTableSeeder::class);
        $this->call(HeadquartersTableSeeder::class);
        $this->call(SupportCentersTableSeeder::class);
        $this->call(VictimsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InterventionsTableSeeder::class);
        $this->call(ProductSupportCenterTableSeeder::class);
        // $this->call(HeadquarterUserTableSeeder::class);
        $this->call(HeadquarterUserSeed::class);

        $this->call(SupportCenterUserTableSeeder::class);

        Model::reguard();
    }
}

class HeadquarterUserSeed extends Seeder
{
    public function run()
    {
        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '2'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '4'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '1',
            'user_id' => '1'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '2'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '3'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '4'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '2',
            'user_id' => '5'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '3',
            'user_id' => '1'
        ]);

        \DB::table('headquarter_user')->insert([
            'headquarter_id' => '3',
            'user_id' => '2'
        ]);
    }
}

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
        $this->call(Test::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(CrisisTableSeeder::class);
//        $this->call(HeadquartersTableSeeder::class);
//        $this->call(SupportCentersTableSeeder::class);
//        $this->call(VictimsTableSeeder::class);
//        $this->call(ProductsTableSeeder::class);
//        $this->call(InterventionsTableSeeder::class);
//        $this->call(ProductSupportCenterTableSeeder::class);
//        $this->call(HeadquarterUserTableSeeder::class);
//        $this->call(SupportCenterUserTableSeeder::class);

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

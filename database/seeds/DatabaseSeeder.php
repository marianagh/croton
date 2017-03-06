<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(PartNumberTableSeeder::class);
        $this->call(RiskReleaseTableSeeder::class);
        $this->call(ConcessionTableSeeder::class);
    }
}

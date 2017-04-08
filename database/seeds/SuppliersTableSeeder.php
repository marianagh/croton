<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('suppliers')->insert([
	            'name' => $faker->name
	        ]);  
        }
    }
}

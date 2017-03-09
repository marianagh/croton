<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,20000) as $index) {
	        DB::table('customers')->insert([
	            'name' => $faker->company,
                'supplier_id' => rand(1,20000)
	        ]);  
        }
    }
}

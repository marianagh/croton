<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;

class ConcessionTableSeeder extends Seeder
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
	        DB::table('concessions')->insert([
	            'model' => $faker->numerify('MOD #######'),
	            'description' => $faker->text($maxNbChars = 200),
	            'status' => rand(1,10),
	            'quantity' => rand(1,50),
	            'work_purchase_order' => $faker->numerify('WPO #####'),
	            'riskrelease_id' => rand(1,15000),
	            'partnumber_id' => rand(1,20000),
	            'customer_id' => rand(1,20000)

	        ]);  
        }
    }
}

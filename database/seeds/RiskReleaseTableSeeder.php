<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;

class RiskReleaseTableSeeder extends Seeder
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
	        DB::table('riskreleases')->insert([
	            'description' => $faker->sentence,
	            'user_id' => $faker->unique()->numberBetween($min = 1, $max = 10),
	            'init_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
	            'end_date' => $faker->date($format = 'Y-m-d', $max = 'now')

	        ]);  
        }
    }
}

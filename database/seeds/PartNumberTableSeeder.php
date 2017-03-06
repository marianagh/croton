<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

use Faker\Factory as Faker;
class PartNumberTableSeeder extends Seeder
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
	        DB::table('partnumbers')->insert([
	            'name' => $faker->name,
	            'description' => $faker->text($maxNbChars = 200)
	        ]);  
        }
    }
}

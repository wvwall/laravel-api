<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Random;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_random_object = new Random();
            $new_random_object->title = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $new_random_object->paragrafo = $faker->regexify('[A-Z]{100}[0-4]{10}');
            $new_random_object->save();
        }
    }
}

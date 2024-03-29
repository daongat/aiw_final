<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 10; $i++) {
            DB::table('tags')->insert([ //,
                'name' => $faker->text($maxNbChars = 10),
        		'slug' =>$faker->slug(),
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 50; $i++) {
            DB::table('articles')->insert([ //,
                'title' => $faker->text($maxNbChars = 50),
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->text($maxNbChars = 500),
        		'content' => $faker->text($maxNbChars = 1000),
        		'slug' =>$faker->slug(),
        		'author_id' => 1,
        		'category_id' => 1
            ]);
        }
    }
}

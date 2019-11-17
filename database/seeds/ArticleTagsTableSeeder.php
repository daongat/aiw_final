<?php

use Illuminate\Database\Seeder;
use App\ArticleTag;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        ArticleTag::truncate();

        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 50; $i++) {
            DB::table('article_tags')->insert([ //,
                'article_id' => $i,
                'tag_id' => '1',
                
            ]);
        }
    }
}

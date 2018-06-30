<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        foreach (array_fill(0,49, 1) as $value) {
            DB::table('categories_news')->insert([
                'categories_id' => rand(1, 10),
                'news_id' => rand(1, 50)
            ]);
            DB::table('news_tags')->insert([
                'news_id' => rand(1, 50),
                'tags_id' => rand(1, 50)
            ]);
        }
    }
}

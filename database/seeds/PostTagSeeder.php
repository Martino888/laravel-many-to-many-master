<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $posts = Post::all();

        foreach ($posts as $item) {
            $postTag = Tag::inRandomOrder()->limit(rand(1, 3))->get();
            $item->tags()->attach($postTag->pluck('id')->all());
        }
    }
}

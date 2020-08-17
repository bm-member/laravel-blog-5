<?php

use App\Post;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) { 
            $post = new Post;
            $post->title = $faker->text(10);
            $post->content = $faker->text(1000);
            $post->user_id = User::first()->id;
            $post->save();
        }
    }
}

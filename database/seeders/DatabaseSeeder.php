<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Location;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use PhpParser\Builder\Function_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Comment::factory(100)->create();
        // \App\Models\Image::factory(40)->create();

        \App\Models\Level::factory()->create(['name' => 'Oro']);
        \App\Models\Level::factory()->create(['name' => 'Plata']);
        \App\Models\Level::factory()->create(['name' => 'Bronce']);


        \App\Models\User::factory(100)->create();

        \App\Models\Category::factory(4)->create();

        \App\Models\Profile::factory(40)->create();

        \App\Models\Location::factory(12)->create();

        \App\Models\Post::factory(100)->create();

        \App\Models\Tag::factory(12)->create();

        \App\Models\Video::factory(100)->create();

        \App\Models\Group::factory(15)->create();

        \App\Models\GroupUser::factory(15)->create();




        //     $users = User::all();

        //     foreach ($users as $user) {
        //         Profile::updateOrCreate(
        //             [
        //                 'user_id' => $user->id,
        //                 \App\Models\Profile::factory(100)->create()
        //                 // 'bio' => $this->faker->sentences($this->faker->numberBetween(1, 3), true),
        //                 // 'country_id' => $this->faker->randomElement($countries)->id,
        //             ]
        //         );
        //     }
        //     User::factory(100)->create()->each(function ($user) {

        //         $profile = $user->profile()->save(Profile::factory())->make();

        //         $profile->location()->save(Location::factory())->make();

        //         $user->groups()->attach($this->array(rand(1, 3)));

        //         $user->image()->save(Image::factory())->make([
        //             'url' => 'https://lorempixel.com/90/90/'
        //         ]);
        //     });

        //     Category::factory(4)->create();
        //     Tag::factory(12)->create();

        //     Post::factory(40)->create()->each(function ($post) {

        //         $post->image()->save(Image::factory()->make());
        //         $post->tags()->attach($this->array(rand(1, 12)));

        //         $number_comments = rand(1, 6);

        //         for ($i = 0; $i < $number_comments; $i++) {
        //             $post->comments()->save(Comment::factory())->make();
        //         }
        //     });

        //     Video::factory(40)->create()->each(function ($video) {

        //         $video->image()->save(Image::factory())->make();
        //         $video->tags()->attach($this->array(rand(1, 12)));

        //         $number_comments = rand(1, 6);

        //         for ($i = 0; $i < $number_comments; $i++) {
        //             $video->comments()->save(Comment::factory())->make();
        //         }
        //     });
        // }

        // public function array($max)
        // {
        //     $values = [];

        //     for ($i = 1; $i < $max; $i++) {
        //         $values[] = $i;
        //     }

        //     return $values;
        // }

    }
}

<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();

        \App\Models\Group::factory(3)->create();
        // \App\Models\Level::factory()->create(['name' => 'Oro']);
        \App\Models\Category::factory(4)->create();
        \App\Models\Location::factory(5)->create();
        // \App\Models\Comment::factory(40)->create();
        // \App\Models\Image::factory(40)->create();
        \App\Models\Tag::factory(12)->create();
        // \App\Models\Post::factory(40)->create();
        \App\Models\Video::factory(40)->create();
        \App\Models\Profile::factory(40)->create();

    }
}

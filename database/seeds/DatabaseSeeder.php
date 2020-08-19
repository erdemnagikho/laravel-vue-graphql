<?php

use App\User;
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
        factory(User::class, 20)->create();

        \App\Topic::create(['name' => 'Featured Sites', 'slug' => 'featured']);
        \App\Topic::create(['name' => 'Useful Links', 'slug' => 'links']);
        \App\Topic::create(['name' => 'Guides & Tutorials', 'slug' => 'tutorials']);

        factory(\App\Post::class, 20)->create();
    }
}

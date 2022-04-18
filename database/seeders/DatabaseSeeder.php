<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Pinky'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'Fam Post',
//            'slug' => 'my-fam-post',
//            'excerpt' => '<p>something</p>',
//            'body' => '<p>something more</p>'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>something</p>',
//            'body' => '<p>something more</p>'
//        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eius architecto corrupti consectetur maiores at quo dolor adipisci cupiditate perspiciatis earum
                alias quisquam natus soluta in ut eveniet, quasi, perferendis eum.",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem rerum repellat, pariatur
                suscipit esse facilis corporis nisi et soluta molestias quia similique cupiditate doloribus est
                non consequuntur? Minima, dolor et. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et maxime nobis autem, rerum corrupti ipsum voluptatem placeat similique expedita quia vitae temporibus
                itaque cupiditate mollitia repellat nihil odio, voluptate aspernatur.</p>"
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eius architecto corrupti consectetur maiores at quo dolor adipisci cupiditate perspiciatis earum
                alias quisquam natus soluta in ut eveniet, quasi, perferendis eum.",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem rerum repellat, pariatur
                suscipit esse facilis corporis nisi et soluta molestias quia similique cupiditate doloribus est
                non consequuntur? Minima, dolor et. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et maxime nobis autem, rerum corrupti ipsum voluptatem placeat similique expedita quia vitae temporibus
                itaque cupiditate mollitia repellat nihil odio, voluptate aspernatur.</p>"
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eius architecto corrupti consectetur maiores at quo dolor adipisci cupiditate perspiciatis earum
                alias quisquam natus soluta in ut eveniet, quasi, perferendis eum.",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem rerum repellat, pariatur
                suscipit esse facilis corporis nisi et soluta molestias quia similique cupiditate doloribus est
                non consequuntur? Minima, dolor et. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et maxime nobis autem, rerum corrupti ipsum voluptatem placeat similique expedita quia vitae temporibus
                itaque cupiditate mollitia repellat nihil odio, voluptate aspernatur.</p>"
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
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
        $categories = Category::factory()->count(12)->create()->unique();

        $users = User::factory()->count(10)->create()->unique();

        $p = 1;
        while ($p <= 30) {
            Post::factory()->create([
                'user_id' => $users->random(),
                'category_id' => $categories->random(),
            ]);
            $p++;
        }

        $posts = Post::all();

        $c = 1;
        while ($c <= 100) {
            Comment::factory()->create([
                'user_id' => $users->random(),
                'post_id' => $posts->random(),
            ]);
            $c++;
        }
    }
}

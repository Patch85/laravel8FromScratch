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
        $users = User::factory(10)->create();
        $categories = Category::factory(30)->create()->unique();

        $a = 1;
        while ($a <= 65) {
            Post::factory()->create([
                'user_id' => $users->random(),
                'category_id' => $categories->random(),
            ]);
            $a++;
        }
    }
}

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
        $users = User::factory(6)->create();
        $categories = Category::factory(4)->create();

        $a = 1;
        while ($a <= 15) {
            Post::factory()->create([
                'user_id' => $users->random(),
                'category_id' => $categories->random(),
            ]);
            $a++;
        }
    }
}

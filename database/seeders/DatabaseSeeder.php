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
        $users = User::factory(8)->create();
        $categories = Category::factory(15)->create()->unique();

        $a = 1;
        while ($a <= 40) {
            Post::factory()->create([
                'user_id' => $users->random(),
                'category_id' => $categories->random(),
            ]);
            $a++;
        }
    }
}

<?php

namespace App\Models;

use Exception;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    /**
     * Returns an array of all blog posts
     *
     * @return array $posts
     * @throws BindingResolutionException
     */
    public static function all(): array
    {
        $files = File::files(resource_path("/posts"));
        $posts = array_map(fn ($file) => $file->getContents(), $files);
        return $posts;
    }

    /**
     * Returns a string built from the contents of an html file
     *
     * @param string $slug
     * @return string $post
     * @throws BindingResolutionException
     * @throws ModelNotFoundException
     * @throws Exception
     */
    public static function find(string $slug): string
    {
        if (!file_exists($path = resource_path("/posts/$slug.html"))) {
            throw new ModelNotFoundException();
        }

        $post = cache()->remember("posts.{$slug}", now()->addHour(), fn () => file_get_contents($path));

        return $post;
    }
}

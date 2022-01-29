<?php

namespace App\Models;

use Exception;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Exception\ParseException;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    /**
     * New Post constructor
     *
     * @param string $title
     * @param string $excerpt
     * @param string $date
     * @param string $body
     * #param string $slug
     */
    public function __construct(string $title, string $excerpt, string $date, string $body, string $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    /**
     * Returns a Collection of all Posts as Post objects
     *
     * @return Collection
     * @throws BindingResolutionException
     */
    public static function all(): Collection
    {
        return collect(File::files(resource_path("/posts")))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug,
            ));
    }


    /**
     * Return a single Post object if a match is found for the slug
     *
     * @param string $slug
     * @return Post
     * @throws BindingResolutionException
     */
    public static function find(string $slug): \App\Models\Post
    {
        return static::all()->firstWhere('slug', $slug);
    }
}

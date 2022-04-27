<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)
                ->withQueryString()
        ]);
    }

    /**
     * @param Post $post
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' =>  $post,
        ]);
    }

    /**
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * @param Request $request
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => ['required', 'min:3', 'max:255', Rule::unique('posts', 'title')],
            'excerpt' => ['required', 'min:3'],
            'body'  => ['required', 'min:3'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => ['min:5', 'image'],
        ], $request->only(['title', 'excerpt', 'body', 'category_id', 'thumbnail']));

        $input['user_id'] = auth()->id();
        $input['slug'] = Str::slug($input['title']);

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $input['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }


        $post = Post::create($input);

        return view('posts.show', [
            'post' => $post,
        ]);
    }
}

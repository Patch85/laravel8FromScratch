<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use LogicException;

class AdminPostController extends Controller
{
    /**
     * Display all posts
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    /**
     * Write a new Post
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function create()
    {
        return view('admin.posts.create');
    }


    /**
     * Store a new Post
     *
     * @param Request $request
     * @return View|Factory
     * @throws BindingResolutionException
     * @throws Exception
     */
    public function store(Request $request)
    {
        $attributes = $this->validatePost($request);

        $post = Post::create($attributes);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Edit an existing Post
     *
     * @param Post $post
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }


    /**
     * Store the changes to an existing post
     *
     * @param Post $post
     * @param Request $request
     * @return View|Factory
     * @throws BindingResolutionException
     * @throws Exception
     */
    public function update(Post $post, Request $request)
    {
        $attributes = $this->validatePost($request, $post);

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    /**
     * Delete an existing Post
     *
     * @param Post $post
     * @return RedirectResponse
     * @throws LogicException
     * @throws BindingResolutionException
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted!');
    }

    /**
     * @param Request $request
     * @param null|Post $post
     * @return array
     * @throws BindingResolutionException
     * @throws Exception
     */
    protected function validatePost(Request $request, ?Post $post = null): array
    {
        $post ??= new Post();

        $attributes = $request->validate([
            'title' => ['required', 'min:3', 'max:255', Rule::unique('posts', 'title')->ignore($post)],
            'excerpt' => ['required', 'min:3'],
            'body'  => ['required', 'min:3'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => ['min:5', 'image'],
        ], $request->only(['title', 'excerpt', 'body', 'category_id', 'thumbnail']));

        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        return $attributes;
    }
}

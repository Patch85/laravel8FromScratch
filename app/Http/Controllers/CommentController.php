<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {

        $input = $request->validate([
            'body' => ['required', 'min:3']
        ], $request->only(['body']));

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $input['body'],
        ]);

        return back()->with('success', 'Comment Added!');
    }
}

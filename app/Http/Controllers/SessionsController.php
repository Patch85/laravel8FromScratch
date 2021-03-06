<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $input = request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], request()->only(['email', 'password']));

        if (! auth()->attempt($input)) {
            throw ValidationException::withMessages(
                ['email' => 'Your provided credentials could not be verified']
            );
        }

        return redirect()->route('posts')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('posts')->with('success', 'Goodbye!');
    }
}

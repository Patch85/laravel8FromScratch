<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect()->route('posts')->with('success', 'Goodbye!');
    }
}

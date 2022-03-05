<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /**
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * @param Request $request
     * @return Redirector|RedirectResponse
     * @throws BindingResolutionException
     */
    public function store(Request $request)
    {
        $input = $request
            ->validate([
                'name' => ['required', 'max:255'],
                'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
                'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
                'password' => ['required', 'min:7', 'max:255'],
            ], $request->only([
                'name',
                'username',
                'email',
                'password',
            ]));

        User::create($input);

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use Illuminate\Contracts\Container\BindingResolutionException;

class NewsletterController extends Controller
{
    /**
     * @param Newsletter $newsletter
     * @param Request $request
     * @return Redirector|RedirectResponse
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     * @throws BindingResolutionException
     */
    public function __invoke(Newsletter $newsletter, Request $request)
    {
        $input = $request->validate(['email' => ['required', 'email']]);

        try {
            $newsletter->subscribe($input['email']);
        } catch (\Exception $e) {
            \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.',
                'original' => $e->getMessage(),
            ]);
        }

        return redirect('/posts')->with('success', 'You are now signed up for our newsletter');
    }
}

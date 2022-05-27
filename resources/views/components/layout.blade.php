<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DJOHN: {{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
</head>

<body style="font-family: Open Sans, sans-serif;">
    <section class="px-6 py-8">

        <nav class="md:flex md:items-center md:justify-between">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165px" height="16px">
                </a>
            </div>

            <div class="mt-8 flex items-center md:mt-0">
                @auth

                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold">Welcome, {{ auth()->user()->username }}</button>
                        </x-slot>

                        <x-slot name="links">
                            @admin
                                <x-dropdown-item href="/admin/posts" :active="request()->routeIs('adminPosts')">
                                    All Posts
                                </x-dropdown-item>

                                <x-dropdown-item href="/admin/posts/create" :active="request()->routeIs('newPost')">
                                    New Post
                                </x-dropdown-item>
                            @endadmin

                            <x-dropdown-item href="#" x-data="{}"
                                @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                            <form id="logout-form" action="/logout" method="post"
                                class="ml-4 text-xs font-semibold text-blue-500">
                                @csrf
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="/register" class="font-semi-bold text-xs uppercase">Register</a>
                    <a href="/login" class="font-semi-bold ml-6 mr-4 text-xs uppercase">Log In</a>
                @endauth

                <a href="#newsletter"
                    class="font-semi-bold ml-3 rounded-full bg-blue-500 py-3 px-3 text-xs uppercase text-white">Subscribe
                    for Updates</a>
            </div>
        </nav>

        {{ $content }}

        <footer id="newsletter"
            class="mt-16 rounded-xl border border-black border-opacity-5 bg-gray-100 px-10 py-16 text-center">
            <img src="/images/lary-newsletter-icon.svg" alt="Lary newsletter icon" class="mx-auto">

            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative mx-auto inline-block rounded-full lg:bg-gray-200">

                    <form action="/newsletter" method="post" class="text-sm lg:flex">

                        @csrf

                        <div class="flex items-center lg:py-3 lg:px-5">

                            <label for="email" class="lg:tw-inline-block hidden">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input type="text" id="email" name="email" placeholder="Your email address"
                                class="pl-4 lg:bg-transparent">

                            @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror

                        </div>

                        <button type="submit"
                            class="mt-4 rounded-full bg-blue-500 py-3 px-8 text-xs font-semibold uppercase text-white hover:bg-blue-600 lg:ml-3 lg:mt-0">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

        </footer>
    </section>

    <x-flash />

</body>

</html>

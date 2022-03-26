<x-layout title="Blog - {{ $post->title }}">
    <x-slot name="content">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 pt-10">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="col-span-4 text-center">
                    <img src="/images/illustration-1.png" alt="Lary illustration" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center justify-center text-sm mt-4">
                        <img src="https://i.pravatar.cc/60?u={{ $post->author->id }}" alt="random avatar" width="60"
                            class="rounded-xl">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/posts/?author={{ $post->author->username }}">
                                    {{ $post->author->username }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="flex justify-between mb-6 -mt-10">
                        <a href="/posts"
                            class="relative inline-flex items-center text-lg hover:text-blue-500 transition-colors duration-200">

                            <x-icon name="left-arrow" class="mr-2" />
                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-4xl mb-10">{{ $post->title }}</h1>

                    <div class="space-y-6 text-lg">
                        {!! $post->body !!}
                    </div>
                </div>

                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                    @auth
                        <x-panel>
                            <form action="/posts/{{ $post->slug }}/comments" method="post">
                                @csrf

                                <header class="flex items-center">
                                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="random avatar"
                                        width="60" height="60" class="rounded-full">

                                    <h2 class="ml-4">Want to Participate?</h2>
                                </header>

                                <div class="mt-6">
                                    <textarea name="body" rows="5" class="w-full mt-10 text-sm focus:ring p-2" placeholder="Your thoughts here..." required></textarea>

                                    @error('body')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <footer class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                                    <button type="submit"
                                        class="bg-blue-500 text-white text-xs uppercase font-semibold rounded-2xl py-2 px-10 hover:bg-blue-600">Post</button>
                                </footer>
                            </form>
                        </x-panel>
                    @else
                        <p class="font-semibold">
                            <a href="/register" class="hover:underline">Register</a>
                            or
                            <a href="/login" class="hover:underline">Log In</a>
                            to leave a comment
                        </p>
                    @endauth

                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </section>
            </article>
        </main>
    </x-slot>
</x-layout>

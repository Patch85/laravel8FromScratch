<x-layout title="Blog - {{ $post->title }}">
    <x-slot name="content">
        <main class="mx-auto mt-6 max-w-6xl space-y-6 pt-10 lg:mt-20">
            <article class="mx-auto max-w-4xl gap-x-10 lg:grid lg:grid-cols-12">

                <div class="col-span-4 text-center">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="thumbnail image for the post" class="rounded-xl">

                    <p class="mt-4 block text-xs text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="mt-4 flex items-center justify-center text-sm">
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
                    <div class="mb-6 -mt-10 flex justify-between">
                        <a href="/posts"
                            class="relative inline-flex items-center text-lg transition-colors duration-200 hover:text-blue-500">

                            <x-icon name="left-arrow" class="mr-2" />
                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="mb-10 text-4xl font-bold">{{ $post->title }}</h1>

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
                                    <textarea name="body" rows="5" class="mt-10 w-full p-2 text-sm focus:ring" placeholder="Your thoughts here..."
                                        required></textarea>

                                    @error('body')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <footer class="mt-6 flex justify-end border-t border-gray-200 pt-6">
                                    <button type="submit"
                                        class="rounded-2xl bg-blue-500 py-2 px-10 text-xs font-semibold uppercase text-white hover:bg-blue-600">Post</button>
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

<x-layout title="Blog - {{ $post->title }}">
    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>

            <p>
               By <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            {!! $post->body !!}
        </article>

        <a href="/posts">Go Back</a>
    </x-slot>
</x-layout>

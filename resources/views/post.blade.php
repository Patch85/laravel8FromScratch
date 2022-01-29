<x-layout title="Blog - {{ $post->title }}">
    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>

            {!! $post->body !!}
        </article>

        <a href="/posts">Go Back</a>
    </x-slot>
</x-layout>

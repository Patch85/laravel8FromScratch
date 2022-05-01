@props(['heading'])

<section class="mx-auto max-w-4xl py-8">

    <h1 class="mb-8 border-b pb-2 text-lg font-bold">{{ $heading }}</h1>

    <div class="flex">
        <aside class="w-48">

            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->routeIs('newPost') ? 'text-blue-500' : '' }}">New
                        Post</a>
                </li>

                <li>
                    <a href="/admin/dashboard" class="{{ request()->routeIs('dashboard') ? 'text-blue-500' : '' }}">
                        Dashboard
                    </a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="mx-auto max-w-sm">
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>

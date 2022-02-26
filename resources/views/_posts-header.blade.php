<header class="max-w-4xl mx-auto mt-10 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>

        <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" alt="Lary Head"
                class="ml-1"> </h2>

        <p class="text-sm mt-14">
            Another year. Another update. We're refreshing the popular Laravel series with new content.
            I'm going to keep you guys up to speed with what's going on!
        </p>

        <div class="tw-flex tw-justify-center mt-8 space-y-2 lg:space-y-0 lg:space-x-4">

            <!-- Category -->
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

                <x-dropdown>

                    <x-slot name="trigger">

                        <button
                            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />

                        </button>

                    </x-slot>

                    <x-slot name="links">

                        <x-dropdown-item href="/" :active="request()->routeIs('posts')">
                            All
                        </x-dropdown-item>

                        @foreach ($categories as $category)
                            <x-dropdown-item href="/categories/{{ $category->slug }}"
                                :active='request()->is("categories/{$category->slug}")'>
                                {{ ucwords($category->name) }}
                            </x-dropdown-item>
                        @endforeach

                    </x-slot>

                </x-dropdown>

            </div>

            <!-- Other Filters -->
            <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

                <select class="flex-1 appearance-none bg-transparent py-2 pr-9 px-3 text-sm font-semibold">
                    <option value="category" disabled selected>Other Filters</option>
                    <option value="other">Other</option>
                    <option value="filters">Filters</option>
                </select>

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />

            </span>

            <!-- Search -->
            <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form action="#" method="get">
                    <input type="text" name="search" placeholder="Find something"
                        class="bg-transparent placeholder-black text-sm font-semibold">
                </form>
            </span>
        </div>
    </div>
</header>
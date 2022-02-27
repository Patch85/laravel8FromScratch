<header class="max-w-4xl mx-auto mt-10 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>

        <div class="tw-flex tw-justify-center mt-4 space-y-2 lg:space-y-0 lg:space-x-4">

            <!-- Category -->
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                <x-category-dropdown />
            </div>

            <!-- Other Filters -->
            {{-- <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

                <select class="flex-1 appearance-none bg-transparent py-2 pr-9 px-3 text-sm font-semibold">
                    <option value="category" disabled selected>Other Filters</option>
                    <option value="other">Other</option>
                    <option value="filters">Filters</option>
                </select>

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />

            </span> --}}

            <!-- Search -->
            <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form action="#" method="get">
                    <input type="text" name="search" class="bg-transparent placeholder-black text-sm font-semibold"
                        placeholder="Find something" value="{{ request('search') }}">
                </form>
            </span>
        </div>
    </div>
</header>

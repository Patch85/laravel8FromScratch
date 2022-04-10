<x-layout title="Blog - New Post">
    <x-slot name="content">
        <section class="px-6 py-8">
            <x-panel class="mx-auto max-w-sm">
                <form action="/admin/posts" method="post">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-6">
                        <label for="title" class="mb-2 block text-xs font-bold uppercase text-gray-700">Title</label>

                        <input type="text" name="title" id="title" class="w-full border border-gray-400 p-2"
                            value="{{ old('title') }}" required>

                        @error('title')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Excerpt --}}
                    <div class="mb-6">
                        <label for="excerpt" class="mb-2 block text-xs font-bold uppercase text-gray-700">Excerpt</label>

                        <textarea name="excerpt" id="excerpt" class="w-full border border-gray-400 p-2"
                            required>{{ old('excerpt') }}</textarea>

                        @error('excerpt')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Post Body --}}
                    <div class="mb-6">
                        <label for="body" class="mb-2 block text-xs font-bold uppercase text-gray-700">Body</label>

                        <textarea name="body" id="body" class="w-full border border-gray-400 p-2" required>{{ old('body') }}</textarea>

                        @error('body')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div class="mb-6">
                        <label for="category_id"
                            class="mb-2 block text-xs font-bold uppercase text-gray-700">Category</label>

                        <select name="category_id" id="category_id">
                            @foreach (\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ ucwords($category->name) }}
                                </option>
                            @endforeach
                        </select>

                        @error('category')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <button type="submit"
                            class="rounded bg-blue-400 py-2 px-4 text-white hover:bg-blue-500">Publish</button>
                    </div>

                </form>
            </x-panel>
        </section>
    </x-slot>
</x-layout>

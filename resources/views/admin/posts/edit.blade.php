<x-layout title="Blog - Edit Post">

    <x-slot name="content">

        <x-setting :heading="'Edit Post: ' . $post->title">

            <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.input type="text" name="title" :value="old('title', $post->title)" required />

                <x-form.textarea name="excerpt" required>
                    {{ old('excerpt', $post->excerpt) }}
                </x-form.textarea>

                <x-form.textarea name="body" required>
                    {{ old('body', $post->body) }}
                </x-form.textarea>

                <x-form.field>
                    <x-form.label name="category_id" labelText="Category" />

                    <select name="category_id" id="category_id" class="w-full rounded-md p-2" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error name='category' />
                </x-form.field>

                <div class="mt-6 flex">

                    <x-form.input type='file' name='thumbnail' :value="old('thumbnail', $post->thumbnail)" />

                    <div class="flex-1">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="ml-6 rounded-xl"
                            width="100">
                    </div>

                </div>

                <x-form.button type="submit" displayText="Update" />

            </form>

        </x-setting>

    </x-slot>
</x-layout>

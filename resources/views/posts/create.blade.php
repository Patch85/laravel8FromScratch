<x-layout title="Blog - New Post">

    <x-slot name="content">

        <x-setting heading="Publish New Post">

            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <x-form.input type="text" name="title" required />

                <x-form.textarea name="excerpt" required />

                <x-form.textarea name="body" required />

                <x-form.field>
                    <x-form.label name="category_id" labelText="Category" />

                    <select name="category_id" id="category_id" class="w-full rounded-md p-2" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error name='category' />
                </x-form.field>

                <x-form.input type='file' name='thumbnail' />

                <x-form.button type="submit" displayText="Publish" />

            </form>

        </x-setting>

    </x-slot>
</x-layout>

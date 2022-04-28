<x-layout title="Blog - New Post">
    <x-slot name="content">
        <section class="mx-auto max-w-md py-8">

            <h1 class="mb-4 text-lg font-bold">Publish New Post</h1>

            <x-panel class="mx-auto max-w-sm">
                <form action="/admin/posts" method="post" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="title" />

                    <x-form.textarea name="excerpt" />

                    <x-form.textarea name="body" />

                    <x-form.field>
                        <x-form.label name="category_id" labelText="Category" />

                        <select name="category_id" id="category_id">
                            @foreach (\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ ucwords($category->name) }}
                                </option>
                            @endforeach
                        </select>

                        <x-form.error name='category' />
                    </x-form.field>

                    <x-form.input name='thumbnail' type='file' />

                    <x-form.button type="submit" displayText="Publish" />

                </form>
            </x-panel>
        </section>
    </x-slot>
</x-layout>

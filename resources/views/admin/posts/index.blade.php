<x-layout title="Blog - Manage Posts">

    <x-slot name="content">

        <x-setting heading="Manage Posts">

            <div class="flex flex-col">

                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">

                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <th class="whitespace-nowrap px-6 py-4">
                                            Post
                                        </th>

                                        <th class="whitespace-nowrap px-6 py-4">
                                            Category
                                        </th>

                                        <th class="whitespace-nowrap px-6 py-4">
                                            Published
                                        </th>

                                        <th class="whitespace-nowrap px-6 py-4">
                                            Action
                                        </th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900 hover:text-blue-600">
                                                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="whitespace-nowrap px-6 py-5">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ ucwords($post->category->name) }}
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="whitespace-nowrap px-6 py-5">
                                                <time>{{ $post->created_at->diffForHumans() }}</time>
                                            </td>

                                            <td class="whitespace-nowrap px-6 py-5">
                                                <div>
                                                    <a href="/admin/post/{{ $post->slug }}/edit"
                                                        class="text-blue-500 hover:text-blue-600">Edit</a>
                                                </div>

                                                <div>
                                                    <form action="/admin/posts/{{ $post->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-red-500 hover:text-red-600">Delete</button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-setting>
    </x-slot>
</x-layout>

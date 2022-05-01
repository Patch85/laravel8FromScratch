<x-layout title="Register">
    <x-slot name="content">
        <main class="mx-auto mt-10 max-w-lg">
            <x-panel>

                <h1 class="text-center text-xl font-bold">Register</h1>

                <form action="/register" method="post" class="mt-10">

                    @csrf

                    <x-form.input type='text' name='name' placeholder="Jane Doe" autocomplete="name" required />

                    <x-form.input type='text' name='username' placeholder="janeDoe" autocomplete="nickname" required />

                    <x-form.input type='email' name='email' placeholder="janeDoe@email.com" autocomplete="email"
                        required />

                    <x-form.input type='password' name='password' placeholder="gO0d$trongP4$$w0rd"
                        autocomplete="new-password" required />

                    <x-form.button type="submit" displayText="Submit" />

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-xs text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                </form>
            </x-panel>
        </main>
    </x-slot>
</x-layout>

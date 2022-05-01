<x-layout title="Log In">
    <x-slot name="content">
        <main class="mx-auto mt-10 max-w-lg">
            <x-panel>
                <h1 class="text-center text-xl font-bold">Log In!</h1>

                <form action="/login" method="post" class="mt-10">
                    @csrf

                    <x-form.input type='email' name='email' autocomplete='username' required />

                    <x-form.input type='password' name='password' autocomplete='current-password' required />

                    <x-form.button type='submit' displayText="Log In" />

                </form>
            </x-panel>
        </main>
    </x-slot>
</x-layout>

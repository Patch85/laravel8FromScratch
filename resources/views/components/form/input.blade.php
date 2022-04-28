@props(['name', 'type' => 'text'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        class="w-full border border-gray-400 p-2"
        value="{{ old('name') }}"
        required>

    <x-form.error name="{{ $name }}" />

</x-form.field>

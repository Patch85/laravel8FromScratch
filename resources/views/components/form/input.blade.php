@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        class="w-full border border-gray-200 p-2 rounded-md"
        {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name="{{ $name }}" />

</x-form.field>

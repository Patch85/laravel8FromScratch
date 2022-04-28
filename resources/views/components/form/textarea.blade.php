@props(['name'])

<div class="mb-6">

    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" class="w-full border border-gray-400 p-2"
        required>{{ old('name') }}</textarea>

    <x-form.error name={{ $name }} />
</div>

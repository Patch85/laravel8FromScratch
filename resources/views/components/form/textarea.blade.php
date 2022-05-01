@props(['name'])

<div class="mb-6">

    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" class="w-full rounded-md border border-gray-200 p-2"
        {{ $attributes }}>{{ old($name) }}</textarea>

    <x-form.error name={{ $name }} />
</div>

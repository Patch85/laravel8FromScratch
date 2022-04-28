@props(['type' => 'submit', 'displayText' => 'submit'])

<x-form.field>
    <button type="{{ $type }}" class="rounded bg-blue-400 py-2 px-4 text-white hover:bg-blue-500">
        {{ $displayText }}
    </button>
</x-form.field>

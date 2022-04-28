@props(['name', 'labelText' => ucwords($name)])

<label for="{{ $name }}" class="mb-2 block text-xs font-bold uppercase text-gray-700">
    {{ $labelText }}
</label>

@props(['label', 'name', 'type' => 'text', 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'border rounded px-3 py-2 w-full']) }}
        value="{{ old($name) }}"
    />
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

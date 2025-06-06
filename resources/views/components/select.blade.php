@props(['label', 'name', 'options' => [], 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'border rounded px-3 py-2 w-full']) }}
    >
        <option value="">-- Pilih {{ $label }} --</option>
        @foreach ($options as $key => $value)
            <option value="{{ $key }}" {{ old($name) == $key ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

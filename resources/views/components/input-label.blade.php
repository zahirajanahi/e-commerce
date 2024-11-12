@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-light text-lg font-serif text-gray-800 mb-2']) }}>
    {{ $value ?? $slot }}
</label>

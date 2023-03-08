@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-red-700']) }}>
    {{ $value ?? $slot }}
</label>

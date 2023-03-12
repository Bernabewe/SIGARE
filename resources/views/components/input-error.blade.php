@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            @php
                $message = 'Ingrese un email o contraseña valido';
            @endphp
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

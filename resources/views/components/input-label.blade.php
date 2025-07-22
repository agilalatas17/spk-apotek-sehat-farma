@props(['value'])

<label {{ $attributes->merge(['class' => 'font-anuphan block font-medium text-md text-gray-900 pl-2 py-2']) }}>
    {{ $value ?? $slot }}
</label>

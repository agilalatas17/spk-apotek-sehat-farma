@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex items-center px-3 py-4 text-lg font-normal text-white transition-colors duration-300 transform bg-white text-zinc-900 hover:text-zinc-900 rounded-md'
            : 'flex items-center px-3 py-4 text-lg font-normal text-white hover:bg-white hover:text-zinc-900 focus:text-zinc-900 transition duration-150 rounded-md ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

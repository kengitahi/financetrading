@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center text-sm font-medium leading-5 text-white focus:outline-none focus:border-light-grey transition duration-150 ease-in-out h-fit text-center capitalize'
            : 'inline-flex items-center text-sm font-medium leading-5 text-light-grey hover:text-white focus:outline-current focus:text-white transition duration-150 ease-in-out h-fit text-center capitalize';
@endphp

<a {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
</a>

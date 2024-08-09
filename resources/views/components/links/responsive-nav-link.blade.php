@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-royal-blue text-start text-base font-medium text-tint-blue bg-indigo-50 focus:outline-none focus:text-tint-blue focus:bg-tint-blue focus:border-tint-blue transition duration-150 ease-in-out pl-[1.65rem]'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-light-grey hover:text-white focus:outline-none focus:text-white focus:bg-white transition duration-150 ease-in-out pl-[1.65rem]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

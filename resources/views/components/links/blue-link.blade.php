<a {{ $attributes->merge(['class' => 'inline-flex items-center px-6 py-3 bg-tint-blue border border-transparent rounded-full font-semibold text-sm w-fit text-white uppercase tracking-widest hover:bg-royal-blue/80 focus:bg-royal-blue/80 active:bg-royal-blue/80 focus:outline-none focus:ring-2 focus:ring-royal-blue/80 focus:ring-offset-2 transition ease-in-out duration-150 hover:shadow-xl']) }}
    href="{{ $href }}">
    {{ $slot }}
    <svg aria-hidden="true" class="ms-2 h-3.5 w-3.5 rtl:rotate-180" fill="none" viewBox="0 0 14 10"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            stroke="currentColor" />
    </svg>
</a>

<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-yellow border border-transparent rounded-full font-semibold text-md w-fit text-black uppercase tracking-widest hover:bg-yellow/75 focus:bg-yellow/75 active:bg-yellow/75 focus:outline-none focus:ring-2 focus:ring-yellow focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

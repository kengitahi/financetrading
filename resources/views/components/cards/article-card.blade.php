<div class="rounded-lg border border-gray-200 bg-accent shadow-xl">
    <a href="#">
        <img alt="" class="rounded-t-lg" src="{{ asset('storage/images/article.jpg') }}" />
    </a>
    <div class="p-5">
        <p class="mb-1 text-sm font-medium capitalize text-dark-blue/60">01.01.2024</p>
        <a href="#">
            <x-typography.h4>
                Noteworthy financial news
            </x-typography.h4>
        </a>
        <x-typography.paragraph class="mb-3 text-dark-blue/80">
            Here are the biggest enterprise acquisitions of 2024 so far, in reverse chronological
            order.
        </x-typography.paragraph>
        <div class="author mb-3 flex items-center gap-2">
            <img alt="Author name" class="text-md h-6 w-6 rounded-full" src="{{ asset('storage/images/avatar.jpg') }}">
            <p class="text-sm font-medium capitalize text-dark-blue/80">Author name</p>
        </div>
        <x-links.yellow-link :href="'#'">Read Article</x-links.yellow-link>
    </div>
</div>

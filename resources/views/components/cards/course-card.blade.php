<div class="rounded-lg border border-gray-200 bg-accent shadow-xl">
    <div class="relative">
        <a href="#">
            <img alt="" class="rounded-t-lg" src="{{ asset('storage/images/article.jpg') }}" />
        </a>
        <p class="absolute right-4 top-4 rounded-full bg-light-grey p-2 text-royal-blue/60" height="32px" width="32px">
            <img alt="" height="20px" src="{{ asset('storage/images/heart.svg') }}" width="20px">
        </p>
    </div>

    <div class="p-5">
        <div class="flex items-center justify-between">
            <div class="mb-1 flex items-center gap-2">
                <p class="mb-1 rounded-xl bg-royal-blue/10 px-3 py-1 text-sm font-medium capitalize text-royal-blue/60">
                    Risk
                    management
                </p>
                <p class="mb-1 text-sm font-medium capitalize text-dark-blue/60">2hr 30mins</p>
            </div>
            <div class="flex items-center gap-[1px]">
                <img alt="" src="{{ asset('storage/images/yellow-star.svg') }}" width="20px" />
                <img alt="" src="{{ asset('storage/images/yellow-star.svg') }}" width="20px">
                <img alt="" src="{{ asset('storage/images/yellow-star.svg') }}" width="20px">
                <img alt="" src="{{ asset('storage/images/yellow-star.svg') }}" width="20px">
                <img alt="" src="{{ asset('storage/images/yellow-star.svg') }}" width="20px">
                <p class="mt-2 pl-1 text-sm font-medium capitalize text-dark-blue/60">4/5</p>
            </div>
        </div>

        <a href="#">
            <x-typography.h4>
                Strategic Planning
            </x-typography.h4>
        </a>
        <x-typography.paragraph class="mb-3 text-dark-blue/80">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, earum sapiente! Itaque sapiente, inventore
            blanditiis debitis eveniet cumque expedita maxime unde architecto, facilis adipisci, aliquam enim tenetur
            dolores repudiandae. Consequatur.
        </x-typography.paragraph>

        <div class="mb-3 flex items-center gap-4">
            <p class="mb-1 text-sm font-medium capitalize text-dark-blue/60">20 lessons</p>
            <p class="mb-1 text-sm font-medium capitalize text-dark-blue/60">400 students</p>
        </div>

        <div class="author mb-3 flex items-center gap-2">
            <img alt="Author name" class="text-md h-6 w-6 rounded-full" src="{{ asset('storage/images/avatar.jpg') }}">
            <p class="text-sm font-medium capitalize text-dark-blue/80">Instructor name</p>
        </div>
        <div class="flex items-center justify-between gap-2">
            <x-links.yellow-link :href="'#'">Preview Course</x-links.yellow-link>
            <x-links.blue-link :href="'#'">Purchase Course</x-links.blue-link>
        </div>

    </div>
</div>

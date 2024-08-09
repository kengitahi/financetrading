<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<header>
    <nav class="bg-tint-blue" x-data="{ open: false }">
        <!-- Primary Navigation Menu -->
        <div class="wrapper">
            <div class="flex h-16 items-center justify-between">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex shrink-0 items-center">
                        <a href="{{ route('home') }}" wire:navigate>
                            <p class="text-lg font-bold text-white">Forextrad.ing</p>
                        </a>
                    </div>
                </div>

                <div class="flex items-center">
                    <!-- Navigation Links -->
                    <div class="hidden items-center space-x-8 sm:-my-px sm:ms-10 lg:flex">
                        <x-links.nav-link :active="request()->routeIs('home')" :href="route('home')" wire:navigate>
                            {{ __('Home') }}
                        </x-links.nav-link>
                        <x-links.nav-link href="#" wire:navigate>
                            {{ __('About Us') }}
                        </x-links.nav-link>
                        <x-links.nav-link href="#" wire:navigate>
                            {{ __('Courses') }}
                        </x-links.nav-link>
                        <x-links.nav-link href="#" wire:navigate>
                            {{ __('Systems') }}
                        </x-links.nav-link>
                        <x-links.nav-link href="#" wire:navigate>
                            {{ __('Best Practices') }}
                        </x-links.nav-link>
                        <x-links.nav-link href="#" wire:navigate>
                            {{ __('Blog') }}
                        </x-links.nav-link>
                        <x-links.nav-link
                            class="w-fit rounded-md border border-light-grey px-3 py-2 hover:border-transparent hover:bg-white hover:text-tint-blue"
                            href="#" wire:navigate>
                            {{ __('Contact us') }}
                        </x-links.nav-link>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:ms-6 sm:items-center md:flex">
                        <x-links.dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-tint-blue transition duration-150 ease-in-out hover:border-white hover:bg-tint-blue hover:text-white focus:outline-none">
                                    <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-on:profile-updated.window="name = $event.detail.name"
                                        x-text="name"></div>

                                    <div class="ms-1">
                                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-links.dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Profile') }}
                                </x-links.dropdown-link>

                                <!-- Authentication -->
                                <button class="w-full text-start" wire:click="logout">
                                    <x-links.dropdown-link>
                                        {{ __('Log Out') }}
                                    </x-links.dropdown-link>
                                </button>
                            </x-slot>
                        </x-links.dropdown>
                    </div>

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center lg:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
            <div class="space-y-1 pb-3 pt-2">
                <x-links.responsive-nav-link :active="request()->routeIs('home')" :href="route('home')" wire:navigate>
                    {{ __('Home') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('About Us') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('Courses') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('Systems') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('Best Practices') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('Blog') }}
                </x-links.responsive-nav-link>
                <x-links.responsive-nav-link href="#" wire:navigate>
                    {{ __('Contact us') }}
                </x-links.responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="border-t border-gray-200 pb-1 pt-4">
                <div class="px-4 pl-[1.65rem]">
                    <div class="text-base font-medium text-light-grey" x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                        x-on:profile-updated.window="name = $event.detail.name" x-text="name"></div>
                    <div class="text-sm font-medium text-grey">{{ auth()->user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-links.responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-links.responsive-nav-link>

                    <!-- Authentication -->
                    <button class="w-full text-start" wire:click="logout">
                        <x-links.responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-links.responsive-nav-link>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

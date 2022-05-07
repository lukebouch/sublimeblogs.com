<div class="bg-gray-50" x-data="{ open: false }">
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#" class="flex items-center gap-1">
                        <img class="w-auto h-12 sm:h-14" src="/assets/images/icon.png" alt="">
                        <span class="text-lg font-bold sm:text-xl">Sublime Blogs</span>
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button @click="open = true" type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md bg-gray-50 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="justify-end flex-auto hidden mr-40 md:flex md:space-x-10">
                {{-- Desktop navigation links --}}
                <x-navigation.desktop-link href="/">Home</x-navigation.desktop-link>
                <x-navigation.desktop-link href="/docs/getting-started">Getting Started</x-navigation.desktop-link>
            </div>
            <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="space-x-3">
                    {{-- <a href="https://app.sublimeblogs.com/register" class="btn-primary">
                        Sign Up </a>
                    <a href="https://app.sublimeblogs.com/login" class="btn-secondary">
                        Log In </a> --}}
                    <a href="#notify-me" class="btn-primary">
                        Notify Me </a>
                </div>
            </div>
        </nav>
    </div>

    <!--
                  Mobile menu, show/hide based on menu open state.

                  Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
    <div class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform md:hidden" x-show="open"
        x-cloak>
        <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
            <div class="flex items-center justify-between px-5 pt-4">
                <div>
                    <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="">
                </div>
                <div class="-mr-2">
                    <button @click="open = false" type="button"
                        class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-3 pt-2 pb-3 space-y-1">
                {{-- Mobile navigation links --}}
                <x-navigation.mobile-link href="/">Home</x-navigation.mobile-link>
                <x-navigation.mobile-link href="/getting-started">Getting Started</x-navigation.mobile-link>
                {{-- <a href="https://app.sublimeblogs.com/register" class="block text-center btn-primary">
                    Sign Up </a>
                <a href="https://app.sublimeblogs.com/" class="block text-center btn-secondary">
                    Log In </a> --}}
                <a href="#notify-me" class="btn-primary">
                    Notify Me </a>
            </div>
        </div>
    </div>
</div>

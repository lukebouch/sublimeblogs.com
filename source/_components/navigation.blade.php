<div class="bg-gray-50" x-data="{ open: false }">
    <div class="max-w-7xl py-6 mx-auto px-4 sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#" class="flex items-center gap-1">
                        <img class="h-12 w-auto sm:h-14" src="/assets/images/icon.png" alt="">
                        <span class="text-lg sm:text-xl font-bold">Sublime Blogs</span>
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button @click="open = true" type="button"
                            class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:space-x-10">
                {{-- Desktop navigation links --}}
            </div>
            <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="space-x-3">
                    <a href="https://app.sublimeblogs.com/register" class="btn-primary">
                        Sign Up </a>
                    <a href="https://app.sublimeblogs.com/login" class="btn-secondary">
                        Log In </a>
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
    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="open"
        x-cloak>
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="">
                </div>
                <div class="-mr-2">
                    <button @click="open = false" type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-3 pt-2 pb-3 space-y-1">
                {{-- Mobile navigation links --}}
                <a href="https://app.sublimeblogs.com/register" class="btn-primary block text-center">
                    Sign Up </a>
                <a href="https://app.sublimeblogs.com/" class="btn-secondary block text-center">
                    Log In </a>
            </div>
        </div>
    </div>
</div>

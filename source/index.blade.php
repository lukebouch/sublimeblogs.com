@extends('_layouts.main')

@section('body')
    <section class="bg-gray-50">
        <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
                <div class="relative h-full">
                    <svg class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full"
                        width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                    </svg>
                    <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4"
                        width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                    </svg>
                </div>
            </div>
            <div class="relative pt-6 pb-16 sm:pb-24">
                <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl md:text-5xl">
                            <span class="block">Don't spin up an entire CMS</span>
                            <span class="block text-primary-600">just for a simple blog.</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 md:mt-5 md:text-lg md:max-w-3xl">
                            Sublime Blogs is the easier way to add a blog to your static site. No need to work with an old,
                            clunky CMS like Wordpress. Use your frontend of choice and deploy to the Jamstack with ease.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative pb-10">
                <div class="absolute inset-0 flex flex-col" aria-hidden="true">
                    <div class="flex-1"></div>
                    <div class="flex-1 w-full bg-gray-800"></div>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <img class="relative rounded-lg shadow-lg" src="/assets/images/post-editor.png"
                        alt="The markdown editor for creating and editing posts.">
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="text-white bg-gray-800">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold">Simplicity at the Core</h2>
                <p class="mt-4 text-lg"></p>
            </div>
            <dl
                class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">

                <x-feature title="Markdown Support">
                    The editor fully supports markdown.
                </x-feature>

            </dl>
        </div>

    </section> --}}

    <div class="bg-white py-16 sm:py-24">
        <div class="relative sm:py-16">
            <div aria-hidden="true" class="hidden sm:block">
                <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
                <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                    <defs>
                        <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                </svg>
            </div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="relative rounded-2xl px-6 py-10 bg-primary-600 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                        <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-primary-500 text-opacity-40" fill="currentColor"
                                d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                            <path class="text-primary-700 text-opacity-40" fill="currentColor"
                                d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="sm:text-center text-white">
                            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Get notified when
                                we&rsquo;re launching.</h2>
                            <p class="mt-6 mx-auto max-w-2xl text-lg">We are not quite ready yet. We are still working on
                                making this the best headless CMS.</p>
                        </div>
                        <form action="{{ $page['apiUrl'] }}/newsletter/contact/add" method="POST"
                            class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                            <input name="redirect_url" type="text"
                                value="{{ $page['production']? 'https://sublimeblogs.com/newsletter/confirmed': 'http://localhost:3000/newsletter/confirmed' }}"
                                hidden>
                            <div class="min-w-0 flex-1">
                                <label for="email" class="sr-only">Email address</label>
                                <input name="email" id="email" type="email"
                                    class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-600"
                                    placeholder="Enter your email">
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-3">
                                <button type="submit" class="btn-secondary block w-full h-full">Notify
                                    me</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

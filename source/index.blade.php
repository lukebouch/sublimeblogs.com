@extends('_layouts.main')

@section('body')
    <section class="bg-gray-50">
        <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 w-full h-full" aria-hidden="true">
                <div class="relative h-full">
                    <svg class="absolute transform right-full translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full"
                        width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                    </svg>
                    <svg class="absolute transform left-full -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4"
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
                <div class="px-4 mx-auto mt-16 max-w-7xl sm:mt-24 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
                            <span class="block">Don't spin up an entire CMS</span>
                            <span class="block text-primary-600">just for a simple blog.</span>
                        </h1>
                        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 md:mt-5 md:text-lg md:max-w-3xl">
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
                <div class="px-4 mx-auto max-w-7xl sm:px-6">
                    <img class="relative rounded-lg shadow-lg" src="/assets/images/post-editor.png"
                        alt="The markdown editor for creating and editing posts.">
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-gray-800">
        <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold">Simplicity at the Core</h2>
                <p class="mt-4 text-lg"></p>
            </div>
            <dl class="gap-6 mt-12 space-y-8 gap-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 lg:grid-cols-4">
                <x-feature title="Markdown Support">
                    The editor fully supports markdown.
                </x-feature>

                <x-feature title="Fast to Setup">
                    It only takes a few minutes to setup.
                </x-feature>

                <x-feature title="Drag-n-Drop Uploading">
                    Drop an image in the editor to have it uploaded and added ask markdown automatically.
                </x-feature>

                <x-feature title="Webhooks">
                    Trigger a build of you site every time you create a new post.
                </x-feature>
            </dl>
        </div>

    </section>

    <section class="mt-10">
        <div class="relative pt-16 pb-32 overflow-hidden bg-white">
            <div class="relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="max-w-xl px-4 mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                        <div>
                            <div>
                                <span
                                    class="flex items-center justify-center w-12 h-12 text-white rounded-md bg-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Access all your posts
                                    through the API</h2>
                                <p class="mt-4 text-lg text-gray-500">At build time, your static site generator can access
                                    all of your posts through the JSON API.</p>
                                <div class="mt-6">
                                    <a href="#notify-me" class="btn-primary">
                                        Notify Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img class="w-full shadow-xl rounded-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                src="/assets/images/api-json-response.png" alt="Json response of the posts api">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <x-pricing />
@endsection

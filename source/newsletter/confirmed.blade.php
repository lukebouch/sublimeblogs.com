@extends('_layouts.main')

@section('body')
    <section class="container py-24 text-center">
        <div class="px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8 text-center">
            <div class="max-w-max mx-auto">
                <div class="sm:flex">
                    <div class="sm:ml-6">
                        <div class="sm:pl-6">
                            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Thanks for
                                joining
                                the
                                newsletter.</h1>
                            <p class="mt-1 text-xl text-gray-500">You will be the first to know when we launch.</p>
                        </div>
                        <div class="mt-10 flex justify-center space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                            <a href="/" class="btn-primary">
                                Go back home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@props(['name', 'description', 'price', 'per', 'cta', 'ctaLink'])

<div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
    <div class="p-6">
        <h2 class="text-lg mt-1 leading-6 font-medium text-gray-900">{{ $name ?? '' }}</h2>
        @isset($description)
            <p class="mt-4 mb-8 text-sm text-gray-500">{{ $description ?? '' }}</p>
        @endisset
        <p>
            <span class="text-4xl font-extrabold text-gray-900">{{ $price ?? '' }}</span>
            @isset($per)
                <span class="text-base font-medium text-gray-500">/{{ $per }}</span>
            @endisset
        </p>
        @isset($cta)
            <a href="{{ $ctaLink ?? '#' }}"
                class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">{{ $cta ?? '' }}</a>
        @endisset
    </div>
    <div class="pt-6 pb-8 px-6">
        <h3 class="mt-1 text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
        <ul role="list" class="mt-6 space-y-4">
            {{ $slot }}
        </ul>
    </div>
</div>

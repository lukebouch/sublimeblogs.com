<div {{ $attributes->class(['relative']) }}>
    <dt>
        <!-- Heroicon name: outline/check -->
        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <p class="ml-9 text-lg leading-6 font-medium">{{ $title }}</p>
    </dt>
    <dd class="mt-2 ml-9 text-base">{{ $slot }}</dd>
</div>

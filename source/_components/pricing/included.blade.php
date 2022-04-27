@props(['title', 'featured' => false])

<li {{ $attributes->class(['flex gap-2 text-sm text-gray-500']) }}>
    {{ $slot }}
    <p @class(['border-b-2 border-primary' => $featured])>{{ $title }}</p>
</li>

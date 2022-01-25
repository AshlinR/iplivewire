@props([
    'icon' => null,
    'color' => null,
])

<a {{ $attributes->merge(['class' => 'flex items-center w-full h-16 px-6 text-green-500 hover:text-blue-500']) }}>
    {{ $slot }}
</a>

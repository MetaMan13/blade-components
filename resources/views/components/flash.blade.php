@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'error' => 'bg-red-400',
        'warning' => 'bg-yellow-400'
    ]
])

<section {{ $attributes->merge(['class' => "{$colors[$type]} border-b p-4"]) }}>
    <div class="flex justify-between text-lg">
        <p>
            {{ $slot }}
        </p>

        <button>&times;</button>
    </div>
</section>
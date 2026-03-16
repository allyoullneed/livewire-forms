    <ul
        {{ $attributes->class([
            'menu'
        ])->merge() }}
    >
        {{ $slot }}
    </ul>
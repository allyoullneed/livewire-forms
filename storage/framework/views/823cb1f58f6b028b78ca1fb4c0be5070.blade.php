<div {{ $attributes->class([
        'skewed-gallery *:w-0',
        'skewed-left' => $left
    ])->merge() }}
    style="--skew:{{ $skew }}"
>
    @if (count($pictures) > 0)
        @foreach ($pictures as $picture)
            <img src="{{ $picture }}"/>
        @endforeach
    @else
        {{ $slot }}
    @endif
</div>  
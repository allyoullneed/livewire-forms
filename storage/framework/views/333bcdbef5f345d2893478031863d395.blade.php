<dialog id="{{ $id }}"
{{ $attributes->class([
    'fixed left-0 top-0 max-w-none w-[100vw] max-h-none h-[100vh] place-items-center hidden open:grid bg-transparent open:bg-[#0006] backdrop-blur-xl'
    ])->merge()
}}>
    {{ $slot }}
</dialog>
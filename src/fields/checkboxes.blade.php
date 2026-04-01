@php
  $inline = isset($inline) && $inline === true;
@endphp

<x-checkboxes
    :id="$id"
    name="{{ $handle }}[]"
    :helper="$instructions"
    :color="isset($color) ? $color : null"
    :size="isset($size) ? $size : null"
    :horizontal="$inline"
    :options="$options"
    wire:model="values.{{ $handle }}"
    @class([
        '[&>div]:order-last' => $instructions_position === 'above',
        'col-span-full' => $width == 100,
        'col-span-9'    => $width == 75,
        'col-span-8'    => $width == 66,
        'col-span-6'    => $width == 50,
        'col-span-4'    => $width == 33,
        'col-span-3'    => $width == 25
    ])
>
  <x-slot:title class="flex justify-between items-center gap-1">
      {{ $display }}
      @if (config('livewire-forms.show-required-badges') != 'off' && in_array('required', $validate ?? []))
          <x-badge :color="$color ?? 'accent'" size="xs" label="Required"/>
      @endif
  </x-slot:title>
</x-checkboxes>
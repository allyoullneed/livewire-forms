@php
$required = in_array('required', $validate ?? []) ? 'required' : null;
$max = intval(substr(array_find($validate ?? [], fn($r) => substr($r, 0, 4) === 'max:'), 4));
if ($max === 0)
    $max = 5;
@endphp
<x-rating
    :id="$id"
    :name="$handle"
    :label="isset($prepend) ? $prepend : null"
    :append="isset($append) ? $append : null"
    :helper="$instructions"
    :value="$value ?? 0"
    :max-value="$max"
    :color="isset($color) ? $color : null"
    :error="isset($error) ? $error : null"
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
</x-rating>
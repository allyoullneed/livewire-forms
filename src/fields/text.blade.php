@php
    $required = in_array('required', $validate ?? []) ? 'required' : null;
@endphp
<x-input
    :id="$id"
    :name="$handle"
    :type="$input_type ?? 'text'"
    :label="isset($prepend) ? $prepend : null"
    :append="isset($append) ? $append : null"
    :helper="$instructions"
    :value="$value"
    :placeholder="isset($placeholder) ? $placeholder : null"
    :color="isset($color) ? $color : null"
    :size="isset($size) ? $size : null"
    :required="$required"
    :maxlength="isset($character_limit) ? $character_limit : null"
    :length-indicator="1"
    :error="isset($error) ? $error : null"
    wire:model="values.{{ $handle }}"
    @class([
      '[&>label]:order-last'    => $instructions_position === 'above',
      'col-span-full'               => $width == 100,
      'col-span-full lg:col-span-9' => $width == 75,
      'col-span-full lg:col-span-8' => $width == 66,
      'col-span-6'                  => $width == 50,
      'col-span-4'                  => $width == 33,
      'col-span-3'                  => $width == 25
    ])
>
  <x-slot:title class="flex justify-between items-center gap-1">
      {{ $display }}
      @if (config('livewire-forms.show-required-badges') != 'off' && $required)
          <x-badge :color="$color ?? 'accent'" size="xs" label="Required"/>
      @endif
  </x-slot:title>
</x-input>

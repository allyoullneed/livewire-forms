@php
    $required = in_array('required', $validate ?? []) ? 'required' : null;
@endphp
<x-select
    multiple
    :id="$id"
    :name="$handle . ($multiple ? '[]' : '')"
    :label="isset($prepend) ? $prepend : null"
    :append="isset($append) ? $append : null"
    :helper="$instructions"
    :error="isset($error) ? $error : null"
    :color="isset($color) ? $color : null"
    :size="isset($size) ? $size : null"
    :options="$options"
    :value="$value"
    :max-rows="$max_rows"
    wire:model="values.{{ $handle }}"
    @class([
      '[&>.dropdown]:order-last'    => $instructions_position === 'above',
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
</x-select>

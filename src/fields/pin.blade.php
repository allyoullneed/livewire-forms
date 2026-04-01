@php
$required = in_array('required', $validate ?? []) ? 'required' : null;
@endphp
<x-pin
    :id="$id"
    :name="$handle"
    :type="($password ?? false) ? 'password' : 'text'"
    :title="$display"
    :label="isset($prepend) ? $prepend : null"
    :append="isset($append) ? $append : null"
    :helper="$instructions"
    :length="$length"
    :numeric="$mode === 'numeric'"
    :no-gap="!$gaps"
    :value="$value"
    :placeholder="isset($placeholder) ? $placeholder : null"
    :color="isset($color) ? $color : null"
    :size="isset($size) ? $size : null"
    :required="$required"
    :maxlength="isset($character_limit) ? $character_limit : null"
    :error="isset($error) ? $error : null"
    wire:model.deep="values.{{ $handle }}"
    @class([
        '[&>div]:order-last' => $instructions_position === 'above',
        'col-span-full' => $width == 100,
        'col-span-9' => $width == 75,
        'col-span-8' => $width == 66,
        'col-span-6' => $width == 50,
        'col-span-4' => $width == 33,
        'col-span-3' => $width == 25
    ])>
  <x-slot:title class="flex justify-between items-center gap-1">
    {{ $display }}
    @if (config('livewire-forms.show-required-badges') != 'off' && in_array('required', $validate ?? []))
        <x-badge color="accent" size="xs" label="Required"/>
    @endif
  </x-slot:title>
  @if ($required)
    <x-badge color="accent" size="xs" class="indicator-item indicator-bottom me-4 mb-1" label="Required" />
  @endif
</x-pin>
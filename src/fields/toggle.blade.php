
<x-toggle
    :id="$id"
    :name="$handle"
    :type="$input_type ?? 'text'"
    :label="isset($inline_label) ? $inline_label : null"
    :label_checked="isset($inline_label_when_true) ? $inline_label_when_true : null"
    :append="isset($append) ? $append : null"
    helper="{{ $instructions }}"
    :checked="$value"
    :valueUnchecked="0"
    :placeholder="isset($placeholder) ? $placeholder : null"
    :error="isset($error) ? $error : null"
    :maxlength="isset($maxlength) ? $maxlength : null"
    wire:model="values.{{ $handle }}"
    @class([
        '[&>input]:order-last' => $instructions_position === 'above',
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
</x-toggle>

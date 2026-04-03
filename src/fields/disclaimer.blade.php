@if ((!isset($popup) || (!$popup ?? true)) && $position === 'below' && $text)
    <div class="bg-base-100 border-base-300 border-1 p-2 rounded-md col-span-full !max-w-none">
        {!! $text !!}
    </div>
@endif
<x-toggle
    :id="$id"
    :name="$handle"
    :type="$input_type ?? 'text'"
    :title="$display"
    :label="isset($inline_label) ? $inline_label : null"
    :label_checked="isset($inline_label_when_true) ? $inline_label_when_true : null"
    :append="isset($append) ? $append : null"
    :checked="$value ?? false"
    :valueUnchecked="0"
    :placeholder="isset($placeholder) ? $placeholder : null"
    :error="isset($error) ? $error : null"
    :maxlength="isset($maxlength) ? $maxlength : null"
    wire:model="values.{{ $handle }}"
    @class([
        '[&>label]:order-last' => $instructions_position === 'above',
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
    @if ($instructions || ($popup ?? false))
    <x-slot:helper class="flex gap-2 items-center text-left">
        @if ($popup ?? false)
            @if ($instructions)
                {!! $instructions !!}:
            @endif
            {!! Blade::render($html_code['code'], [
                'id' => $id,
                'handle' => $handle,
                'title' => $display,
                'text' => $text,
            ]) !!}
        @else
            {!! $instructions !!}
        @endif
    </x-slot:helper>
    @endif
</x-toggle>
@if ((!isset($popup) || (!$popup ?? true)) && $position === 'above' && $text)
    <div class="bg-base-100 border-base-300 border-1 p-2 rounded-md col-span-full !max-w-none outline-none">
       {!! $text !!}
    </div>
@endif

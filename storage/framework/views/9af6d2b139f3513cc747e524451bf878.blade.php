<x-input type="password" 
    :title="$title"
    :label="$label"
    :placeholder="$placeholder"
    :pattern="$pattern ? $pattern : ($defaultPattern ? '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$' : null)"
    :error="$error"
    :helper="$helper"
    :color="$color"
    :ghost="$ghost"
    :icon="$icon"
    :trailIcon="$trailIcon"
    {{ $attributes }}
>
    @if ($eye)
        @if (gettype($eye) === 'boolean' || $eye === 'eye')
            <x-button type="button" no-spinner variant="ghost" size="sm"
                class="p-1 text-base-content btn-circle order-last"
                :tabIndex="!$eyeFocus ? -1 : null"
                onclick="
                    var eyeButton = this.nextElementSibling;
                    this.classList.add('hidden');
                    eyeButton.classList.remove('hidden');
                    this.previousElementSibling.setAttribute('type', 'text');
                    if (document.activeElement == this)
                        eyeButton.focus({ focusVisible: true });
                ">
                <x-icon name="heroicon-o-eye"/>
            </x-button>
            <x-button type="button" no-spinner variant="ghost" size="sm"
                class="p-1 text-base-content btn-circle order-last hidden"
                :tabIndex="!$eyeFocus ? -1 : null"
                onclick="
                    var eyeButton = this.previousElementSibling;
                    this.classList.add('hidden');
                    eyeButton.classList.remove('hidden');
                    eyeButton.previousElementSibling.setAttribute('type', 'password');
                    if (document.activeElement == this)
                        eyeButton.focus({ focusVisible: true });
                ">
                <x-icon name="heroicon-o-eye-slash"/>
            </x-button>
        @else
        @endif
    @endif
</x-input>
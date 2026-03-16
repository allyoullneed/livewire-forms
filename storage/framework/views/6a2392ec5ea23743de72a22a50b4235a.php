<?php
// Extract runtime "with" parameter if provided (overrides everything)
if (isset($__runtimeWith) && is_array($__runtimeWith) && !empty($__runtimeWith)) {
    extract($__runtimeWith, EXTR_OVERWRITE);
}
?>
<?php if (isset($__placeholder)) { echo $__placeholder; return; } ?>


                <form class="flex flex-col gap-2" wire:submit="register" no-separator>
                    <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['type' => 'email','placeholder' => 'yourname@domain.com','icon' => 'heroicon-s-user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'register-email','class' => 'invalid:border-error','name' => 'email','required' => true,'wire:model' => 'email']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                         <?php $__env->slot('title', null, ['class' => 'w-full grid grid-cols-[auto_auto_1fr] items-center gap-1','aria-describedby' => 'register-email-instructions']); ?> 
                            Email
                            <span class="text-sm inline align-baseline"> (A verification mail will be sent to you)</span>
                            <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => 'error','size' => 'xs','label' => 'Required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'justify-self-end']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['title' => 'Name','type' => 'name','placeholder' => 'John Doe','icon' => 'heroicon-o-user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'register-name','class' => 'invalid:border-error','name' => 'name','wire:model' => 'name']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
                    <div class="flex flex-col md:grid md:grid-cols-2 gap-2 items-stretch md:justify-stretch md:items-start">
                    <legend class="flex items-center justify-between gap-1 pb-0 col-span-2">
                        <span class="text-lg overflow-x-visible whitespace-nowrap">Password</span>
                        <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => 'error','size' => 'xs','label' => 'Required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'justify-self-end']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
                    </legend>
                    <span class="text-sm justify-start -mt-3 p-0 col-span-full text-[0.75rem]">
                        (&ge;8 characters, with number, and lowercase and uppercase letters)
                    </span>
                    <?php if (isset($component)) { $__componentOriginal5e81272109285d7dd34b24353cfc22b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e81272109285d7dd34b24353cfc22b1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Password::resolve(['pattern' => '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}','placeholder' => '●●●●●●●●','icon' => 'heroicon-s-lock-closed','eye' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Password::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'register-password','class' => 'invalid:border-error','name' => 'password','required' => true,'wire:model.live' => 'password']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e81272109285d7dd34b24353cfc22b1)): ?>
<?php $attributes = $__attributesOriginal5e81272109285d7dd34b24353cfc22b1; ?>
<?php unset($__attributesOriginal5e81272109285d7dd34b24353cfc22b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e81272109285d7dd34b24353cfc22b1)): ?>
<?php $component = $__componentOriginal5e81272109285d7dd34b24353cfc22b1; ?>
<?php unset($__componentOriginal5e81272109285d7dd34b24353cfc22b1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5e81272109285d7dd34b24353cfc22b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e81272109285d7dd34b24353cfc22b1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Password::resolve(['placeholder' => 'Confirmation','icon' => 'heroicon-s-lock-closed'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Password::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'invalid:border-error','name' => 'password2','required' => true,'right' => true,'password-icon-tabindex' => true,'wire:model.live' => 'password2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e81272109285d7dd34b24353cfc22b1)): ?>
<?php $attributes = $__attributesOriginal5e81272109285d7dd34b24353cfc22b1; ?>
<?php unset($__attributesOriginal5e81272109285d7dd34b24353cfc22b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e81272109285d7dd34b24353cfc22b1)): ?>
<?php $component = $__componentOriginal5e81272109285d7dd34b24353cfc22b1; ?>
<?php unset($__componentOriginal5e81272109285d7dd34b24353cfc22b1); ?>
<?php endif; ?>
                    <progress id="register-password-strength" class="col-span-full progress error-success-progress light:border-1
                    [&::-moz-progress-bar]:[color:color-mix(in_hwb,var(--color-success)_var(--progress-perc),var(--color-error))]
                    [&::-webkit-progress-bar]:[color:color-mix(in_hwb,var(--color-success)_var(--progress-perc),var(--color-error))]
                    " wire:ignore value="0" max="11"></progress>
                    <script>
                        function passwordStrength(password) {
                            if (password.length < 8) {
                                return 0;
                            }

                            let strength = 1, categoryStrength = -4;
                            let nb = false, lc = false, uc = false, sp = false;
                            let charCat = 0, prevCharCat = 0;
                            if (password.length >= 10)
                                strength++;
                            if (password.length >= 12)
                                strength++;

                            for (let c of password){
                                if (c >= '0' && c <= '9') {
                                    nb = true;
                                    prevCharCat = charCat;
                                    charCat = 1;
                                    if (charCat != prevCharCat)
                                        categoryStrength++;
                                }
                                else if (c >= 'a' && c <= 'z') {
                                    lc = true;
                                    prevCharCat = charCat;
                                    charCat = 2;
                                    if (charCat != prevCharCat)
                                        categoryStrength++;
                                }
                                else if (c >= 'A' && c <= 'Z') {
                                    uc = true;
                                    prevCharCat = charCat;
                                    charCat = 3;
                                    if (charCat != prevCharCat)
                                        categoryStrength++;
                                }
                                else {
                                    sp = true;
                                    prevCharCat = charCat;
                                    charCat = 4;
                                    if (charCat != prevCharCat)
                                        categoryStrength++;
                                }
                            }
                            strength += (nb ? 1 : 0) + (lc ? 1 : 0) + (uc ? 1 : 0) + (sp ? 1 : 0) - 1;
                            strength += Math.max(0, Math.min(5, categoryStrength));
                            return strength;
                        }
                        var current = $wire.$el;
                        var passwordField = current.querySelector('#register-password');
                        var strengthField = current.querySelector('#register-password-strength');
                        passwordField.addEventListener(
                            'input',
                            (event) => {
                                var strength = passwordStrength(event.target.value);
                                strengthField.value = strength;
                                strengthField.style='--progress-perc:' + 100 * (strength - 1) / (strengthField.max - 1) + '%';
                            }
                        );
                    </script>
                    </div>
                    <fieldset class="fieldset py-0">
                        <div class="grid grid-cols-[auto_auto] grid-rows-[auto_auto] justify-between items-start gap-1 w-full text-lg pb-0">
                            <div class="flex justify-between items-center">
                                Mail verification pin
                                <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => 'error','size' => 'xs','label' => 'Required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
                            </div>
                            <div>
                                <?php if (isset($component)) { $__componentOriginal7beff28d4bfb71e515a985851ec1c491 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7beff28d4bfb71e515a985851ec1c491 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Pin::resolve(['length' => '8','numeric' => true,'noGap' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Pin::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'pin']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7beff28d4bfb71e515a985851ec1c491)): ?>
<?php $attributes = $__attributesOriginal7beff28d4bfb71e515a985851ec1c491; ?>
<?php unset($__attributesOriginal7beff28d4bfb71e515a985851ec1c491); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7beff28d4bfb71e515a985851ec1c491)): ?>
<?php $component = $__componentOriginal7beff28d4bfb71e515a985851ec1c491; ?>
<?php unset($__componentOriginal7beff28d4bfb71e515a985851ec1c491); ?>
<?php endif; ?>
                            </div>
                            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['icon' => 'heroicon-o-envelope'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'btn btn-primary w-max col-start-2 row-span-full','wire:click' => 'emailPin']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Send pin <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                        </div>
                    </fieldset>

                    <div class="grid grid-cols-[3fr_1fr] gap-0 !justify-between p-0">
                        <?php if (isset($component)) { $__componentOriginal30a895b5a273443806b56ec1f117a21f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30a895b5a273443806b56ec1f117a21f = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Toggle::resolve(['title' => 'Newsletter','label' => 'Opted out','labelChecked' => 'Subscribed','checked' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Toggle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'newsletter']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30a895b5a273443806b56ec1f117a21f)): ?>
<?php $attributes = $__attributesOriginal30a895b5a273443806b56ec1f117a21f; ?>
<?php unset($__attributesOriginal30a895b5a273443806b56ec1f117a21f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30a895b5a273443806b56ec1f117a21f)): ?>
<?php $component = $__componentOriginal30a895b5a273443806b56ec1f117a21f; ?>
<?php unset($__componentOriginal30a895b5a273443806b56ec1f117a21f); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['icon' => 'heroicon-o-pencil-square','label' => 'Register'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-primary row-span-2 self-end justify-self-end order-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                    </div>
                </form>
                <?php /**PATH /var/www/allyouneed.local/storage/framework/views/livewire/islands/a73f1d05-2.blade.php ENDPATH**/ ?>
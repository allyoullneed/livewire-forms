<?php
// Extract runtime "with" parameter if provided (overrides everything)
if (isset($__runtimeWith) && is_array($__runtimeWith) && !empty($__runtimeWith)) {
    extract($__runtimeWith, EXTR_OVERWRITE);
}
?>
<?php if (isset($__placeholder)) { echo $__placeholder; return; } ?>


                <form class="flex flex-col gap-2" wire:submit="login">
                    <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['type' => 'email','placeholder' => 'yourname@domain.com','icon' => 'heroicon-s-user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'login-email','class' => 'w-full invalid:border-error','name' => 'email','required' => true,'wire:model' => 'email']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                     <?php $__env->slot('title', null, ['class' => 'flex justify-between items-center']); ?> 
                        Login
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
                    <?php if (isset($component)) { $__componentOriginal5e81272109285d7dd34b24353cfc22b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e81272109285d7dd34b24353cfc22b1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Password::resolve(['placeholder' => '●●●●●●●●','icon' => 'heroicon-s-lock-closed','eye' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Password::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'login-password','class' => 'w-full invalid:border-error','name' => 'password','required' => true,'wire:model' => 'password']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                     <?php $__env->slot('title', null, ['class' => 'flex justify-between items-center']); ?> 
                        Password
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
                     <?php $__env->endSlot(); ?>
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
                    <?php if (isset($component)) { $__componentOriginal472b30d8fa4dce64afaf3e56d283a557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal472b30d8fa4dce64afaf3e56d283a557 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Checkbox::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'rememberMe']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                         <?php $__env->slot('label', null, []); ?> 
                            <div class="flex">
                            <span>Remember me</span>
                            <?php if (isset($component)) { $__componentOriginalfcb9bb5484cb02bfca228758d8a74d75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Dropdown::resolve(['hover' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-normal text-nowrap text-xs bg-base-100 p-2 rounded-sm border-1 border-info']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                 <?php $__env->slot('trigger', null, ['tabindex' => '-1']); ?> 
                                    <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'icon-info'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'inline w-4 h-4 align-text-top hover:text-primary outline-none focus:text-primary transition']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $attributes = $__attributesOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__attributesOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $component = $__componentOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__componentOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
                                 <?php $__env->endSlot(); ?>
                                If you are using a public computer:
                                <ul class="ml-6 list-disc">
                                    <li>Do not tick "Remember me".</li>
                                    <li>Explicitly log out at the end of your visit.</li>
                                </ul>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75)): ?>
<?php $attributes = $__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75; ?>
<?php unset($__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfcb9bb5484cb02bfca228758d8a74d75)): ?>
<?php $component = $__componentOriginalfcb9bb5484cb02bfca228758d8a74d75; ?>
<?php unset($__componentOriginalfcb9bb5484cb02bfca228758d8a74d75); ?>
<?php endif; ?>
                            </div>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal472b30d8fa4dce64afaf3e56d283a557)): ?>
<?php $attributes = $__attributesOriginal472b30d8fa4dce64afaf3e56d283a557; ?>
<?php unset($__attributesOriginal472b30d8fa4dce64afaf3e56d283a557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal472b30d8fa4dce64afaf3e56d283a557)): ?>
<?php $component = $__componentOriginal472b30d8fa4dce64afaf3e56d283a557; ?>
<?php unset($__componentOriginal472b30d8fa4dce64afaf3e56d283a557); ?>
<?php endif; ?>
                <div class="flex !justify-between py-2">
                    <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['variant' => 'ghost'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['spinner-end' => true,'type' => 'button','tabindex' => '-1','wire:click' => 'emailPasswordReset']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Forgot your password? <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['icon' => 'heroicon-o-lock-open'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-primary']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Log in <?php echo $__env->renderComponent(); ?>
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
                <?php /**PATH /var/www/allyouneed.local/storage/framework/views/livewire/islands/a73f1d05-1.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['type' => 'password','title' => $title,'label' => $label,'placeholder' => $placeholder,'error' => $error,'helper' => $helper,'color' => $color,'ghost' => $ghost,'icon' => $icon,'trailIcon' => $trailIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pattern' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pattern ? $pattern : ($defaultPattern ? '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$' : null)),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <?php if($eye): ?>
        <?php if(gettype($eye) === 'boolean' || $eye === 'eye'): ?>
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['variant' => 'ghost','size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','no-spinner' => true,'class' => 'p-1 text-base-content btn-circle order-last','tabIndex' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$eyeFocus ? -1 : null),'onclick' => '
                    var eyeButton = this.nextElementSibling;
                    this.classList.add(\'hidden\');
                    eyeButton.classList.remove(\'hidden\');
                    this.previousElementSibling.setAttribute(\'type\', \'text\');
                    if (document.activeElement == this)
                        eyeButton.focus({ focusVisible: true });
                ']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-eye'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['variant' => 'ghost','size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','no-spinner' => true,'class' => 'p-1 text-base-content btn-circle order-last hidden','tabIndex' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$eyeFocus ? -1 : null),'onclick' => '
                    var eyeButton = this.previousElementSibling;
                    this.classList.add(\'hidden\');
                    eyeButton.classList.remove(\'hidden\');
                    eyeButton.previousElementSibling.setAttribute(\'type\', \'password\');
                    if (document.activeElement == this)
                        eyeButton.focus({ focusVisible: true });
                ']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-eye-slash'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        <?php else: ?>
        <?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/9af6d2b139f3513cc747e524451bf878.blade.php ENDPATH**/ ?>
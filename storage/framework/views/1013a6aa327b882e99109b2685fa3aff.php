<?php if($href): ?>
    <a
        href="<?php echo e($href); ?>"
            <?php echo e($attributes->class([
            'btn',
            'btn-neutral'        => $color === 'neutral',
            'btn-primary'        => $color === 'primary',
            'btn-secondary'      => $color === 'secondary',
            'btn-accent'         => $color === 'accent',
            'btn-info'           => $color === 'info',
            'btn-success'        => $color === 'success',
            'btn-warning'        => $color === 'warning',
            'btn-error'          => $color === 'error',
            'btn-soft'           => $variant === 'soft',
            'btn-outline'        => $variant === 'outline',
            'btn-gradient'       => $variant === 'gradient',
            'btn-ghost btn-text' => $variant === 'ghost',
            'btn-dash btn-outline border-dashed' => $variant === 'dash',
            'btn-xl'             => $size === 'xl',
            'btn-lg'             => $size === 'lg',
            'btn-md'             => $size === 'md',
            'btn-sm'             => $size === 'sm',
            'btn-xs'             => $size === 'xs'
        ])->merge()); ?>

    >
<?php else: ?>
    <button
        <?php echo e($attributes->class([
            'btn',
            'btn-neutral'        => $color === 'neutral',
            'btn-primary'        => $color === 'primary',
            'btn-secondary'      => $color === 'secondary',
            'btn-accent'         => $color === 'accent',
            'btn-info'           => $color === 'info',
            'btn-success'        => $color === 'success',
            'btn-warning'        => $color === 'warning',
            'btn-error'          => $color === 'error',
            'btn-soft'           => $variant === 'soft',
            'btn-outline'        => $variant === 'outline',
            'btn-gradient'       => $variant === 'gradient',
            'btn-ghost btn-text' => $variant === 'ghost',
            'btn-dash btn-outline border-dashed' => $variant === 'dash',
            'btn-xl'             => $size === 'xl',
            'btn-lg'             => $size === 'lg',
            'btn-md'             => $size === 'md',
            'btn-sm'             => $size === 'sm',
            'btn-xs'             => $size === 'xs'
        ])->merge()); ?>

    >
        <?php if(gettype($loadIndicator) === 'object'): ?>
            <?php echo e($loadIndicator->withAttributes(['class' => 'not-in-data-loading:hidden' . ($indicatorEnd ? ' order-last' : '')])); ?>

        <?php elseif(in_array($loadIndicator, ['spinner', 'dots', 'ring', 'ball', 'bars', 'infinity'])): ?>
            <?php if (isset($component)) { $__componentOriginal929160c4641f593cd6ee5427d3343ee8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal929160c4641f593cd6ee5427d3343ee8 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Loading::resolve(['variant' => $loadIndicator] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Loading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'not-in-data-loading:hidden',
                'order-last' => $indicatorEnd
             ]))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal929160c4641f593cd6ee5427d3343ee8)): ?>
<?php $attributes = $__attributesOriginal929160c4641f593cd6ee5427d3343ee8; ?>
<?php unset($__attributesOriginal929160c4641f593cd6ee5427d3343ee8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal929160c4641f593cd6ee5427d3343ee8)): ?>
<?php $component = $__componentOriginal929160c4641f593cd6ee5427d3343ee8; ?>
<?php unset($__componentOriginal929160c4641f593cd6ee5427d3343ee8); ?>
<?php endif; ?>
        <?php elseif($loadIndicator !== '0'): ?>
            <?php if (isset($component)) { $__componentOriginal929160c4641f593cd6ee5427d3343ee8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal929160c4641f593cd6ee5427d3343ee8 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Loading::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Loading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'not-in-data-loading:hidden',
                'order-last' => $indicatorEnd
                ]))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal929160c4641f593cd6ee5427d3343ee8)): ?>
<?php $attributes = $__attributesOriginal929160c4641f593cd6ee5427d3343ee8; ?>
<?php unset($__attributesOriginal929160c4641f593cd6ee5427d3343ee8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal929160c4641f593cd6ee5427d3343ee8)): ?>
<?php $component = $__componentOriginal929160c4641f593cd6ee5427d3343ee8; ?>
<?php unset($__componentOriginal929160c4641f593cd6ee5427d3343ee8); ?>
<?php endif; ?>
        <?php endif; ?>
<?php endif; ?>
    
    <?php if(gettype($icon) === 'string'): ?>
        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'w-6 flex justify-center items-center',
            'in-data-loading:hidden' => $loadIndicator && !$indicatorEnd
        ]); ?>"
        >
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </span>
    <?php elseif($icon): ?>
        <?php echo e($icon); ?>

    <?php endif; ?>

    <?php echo e($label ?? $slot); ?>


    <?php if(gettype($trailIcon) === 'string'): ?>
        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'w-6',
            'in-data-loading:hidden' => $loadIndicator && $indicatorEnd
        ]); ?>"
        >
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $trailIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </span>
    <?php elseif($trailIcon): ?>
        <?php echo e($trailIcon); ?>

    <?php endif; ?>

<?php if($href): ?>
    </a>
<?php else: ?>
    </button>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/e797e95273bfbf13d33affe8045d702b.blade.php ENDPATH**/ ?>
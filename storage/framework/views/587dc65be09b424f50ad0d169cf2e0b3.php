    <li <?php echo e($attributes); ?>>
        <hr/>
            
        <?php if(gettype($icon) === 'object'): ?>
            <?php echo e($icon->withAttributes(['class' => 'timeline-middle'])); ?>

        <?php elseif($icon): ?>
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'timeline-middle',
                'size-7' => $size === 'xl',
                'size-6' => $size === 'lg',
                'size-5' => $size === 'md' || $size === null,
                'size-4' => $size === 'sm',
                'size-3' => $size === 'xs',
                ]))]); ?>
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
        <?php endif; ?>

        <?php if(gettype($start) === 'object'): ?>
            <div <?php echo e($start->attributes->class([
                'timeline-start' => !$swapped,
                'timeline-end'   => $swapped,
                ])->merge()); ?>>
            <?php echo e($start); ?>

            </div>
        <?php elseif($start): ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'timeline-start' => !$swapped,
                'timeline-end'   => $swapped,
                ]); ?>"><?php echo e($start); ?></div>
        <?php endif; ?>
        
        <?php if(gettype($end) === 'object'): ?>
            <div <?php echo e($end->attributes->class([
                'timeline-start' => $swapped,
                'timeline-end'   => !$swapped,
                ])->merge()); ?>>
            <?php echo e($end); ?>

            </div>
        <?php elseif($end): ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'timeline-start' => $swapped,
                'timeline-end'   => !$swapped,
                ]); ?>"><?php echo e($end); ?></div>
        <?php endif; ?>
        <hr/>
    </li><?php /**PATH /var/www/allyouneed.local/storage/framework/views/5bc1fdb593d9351563ceb8573417e9ea.blade.php ENDPATH**/ ?>
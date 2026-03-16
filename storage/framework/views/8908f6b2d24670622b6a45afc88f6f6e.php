<div
    <?php echo e($attributes->class([
        'alert grid grid-cols-1 justify-start gap-y-3',
        'alert-primary'          => ($type ?? $color) === 'primary',
        'alert-info'             => ($type ?? $color) === 'info',
        'alert-success'          => ($type ?? $color) === 'success',
        'alert-warning'          => ($type ?? $color) === 'warning',
        'alert-error'            => ($type ?? $color) === 'error',
        'alert-soft'             => $variant === 'soft' || $variant === 'ghost',
        'alert-outline'          => $variant === 'outline',
        'alert-dash alert-outline border-dashed' => $variant === 'dash'
        ])->merge()); ?>

    role="alert">
    <div
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'alert grid-cols-1 p-0 border-none bg-transparent shadow-none',
        'alert-primary'          => ($type ?? $color) === 'primary',
        'alert-info'             => ($type ?? $color) === 'info',
        'alert-success'          => ($type ?? $color) === 'success',
        'alert-warning'          => ($type ?? $color) === 'warning',
        'alert-error'            => ($type ?? $color) === 'error',
        'alert-soft'             => $variant === 'soft' || $variant === 'ghost',
        'alert-outline'          => $variant === 'outline',
        'alert-dash alert-outline border-dashed' => $variant === 'dash'
        ]); ?>"
        <?php if($attributes->has(':class')): ?>
            :class="<?php echo $attributes->get(':class'); ?>"
        <?php endif; ?>
    >
        <div class="flex items-start gap-4">
            <?php if(isset($icon) && $icon !== ""): ?>
                <?php if(gettype($icon) === 'string'): ?>
                    <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 size-6']); ?>
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
                <?php else: ?>
                    <div
                        <?php echo e($icon->attributes); ?>

                    >
                    <?php echo e($icon); ?>

                    </div>
                <?php endif; ?>
            <?php elseif($type === 'success'): ?>
                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-check-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 size-6']); ?>
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
            <?php elseif($type === 'warning'): ?>
                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-exclamation-triangle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 size-6']); ?>
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
            <?php elseif($type === 'error'): ?>
                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-x-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 size-6']); ?>
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
            <?php elseif(($type === "" || $type === "info") && $icon === null): ?>
                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-information-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 size-6']); ?>
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
            <div class="basis-fullblock self-center flex flex-col items-start">
                <?php if($title): ?>
                    <?php if(gettype($title) === 'object'): ?>
                        <span <?php echo e($title->attributes->class([
                                'block font-bold' => $description != null
                            ])->merge()); ?>><?php echo e($title); ?></span>
                    <?php else: ?>
                        <span <?php echo e($attributes->except(['class'])->class([
                                'block font-bold' => $description != null
                            ])); ?>><?php echo e($title); ?></span>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(gettype($description) === 'object' && $slot->isNotEmpty()): ?>
                    <span <?php echo e($attributes->except(['class'])->class(['text-xs' => $title != null])->merge()); ?>>
                        <span <?php echo e($description->attributes->class(['text-xs' => $title != null])->merge()); ?>>
                            <?php echo e($description); ?>

                        </span>
                        <?php echo e($slot); ?>

                    </span>
                <?php elseif(gettype($description) === 'object'): ?>
                    <span <?php echo e($description->attributes->class(['text-xs' => $title != null])->merge()); ?>>
                        <?php echo e($description); ?>

                    </span>
                <?php elseif($description || $slot->isNotEmpty()): ?>
                    <span <?php echo e($attributes->except(['class'])->class(['text-xs' => $title != null])->merge()); ?>>
                        <?php echo e($description); ?>

                        <?php echo e($slot); ?>

                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(isset($actions)): ?>
        <div 
            <?php echo e($actions->attributes->except(['class'])->class([
                'ayn-child:[:where(.btn)]:btn-sm'
            ])->merge()); ?>

        >
        <?php echo e($actions); ?>

        </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/871a22e047accedf646190a4c7216279.blade.php ENDPATH**/ ?>
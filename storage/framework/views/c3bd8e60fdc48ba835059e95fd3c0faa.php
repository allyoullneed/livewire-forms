<?php if($label || !$slot->isEmpty()): ?>
<li 
    <?php echo e($attributes->except(['class', 'href', 'target', 'wire:navigate', 'wire:navigate.hover', 'wire:current', 'wire:current.ignore', 'open'])->merge()); ?>

    >
    <?php if($label && !$slot->isEmpty()): ?>
        <?php if($collapsible): ?>
            <details class="inline-block"
                <?php echo e($attributes->only(['open'])); ?>

                >
                <summary 
                    <?php echo e($attributes->class([
                        'select-none',
                        'menu-title' => $title
                        ])->merge()->except(['open'])); ?>

                >
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
<?php $component->withAttributes(['class' => 'h-lh']); ?>
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
                    <?php elseif($icon): ?>
                        <div <?php echo e($icon->attributes); ?>>
                        <?php echo $icon->withAttributes($icon->attributes->getAttributes()); ?>

                        </div>
                    <?php endif; ?>
                    <?php echo e($label); ?>

                </summary>
                <?php echo e($slot); ?>

                </details>
        <?php else: ?>
            <a
                <?php echo e($attributes->only((['class', 'href', 'target', 'wire:navigate', 'wire:navigate.hover', 'wire:current', 'wire:current.ignore']))->class([
                    'min-w-max select-none',
                    'menu-title' => $title
                ])->merge()); ?>

            >
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
<?php $component->withAttributes(['class' => 'h-lh']); ?>
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
                <?php elseif($icon): ?>
                    <div <?php echo e($icon->attributes); ?>>
                    <?php echo $icon->withAttributes($icon->attributes->getAttributes()); ?>

                    </div>
                <?php endif; ?>
                <?php if(gettype($label) === 'object'): ?>
                    <div <?php echo e($label->attributes); ?>>
                        <?php echo e($label); ?>

                    </div>
                <?php else: ?>
                    <?php echo e($label); ?>

                <?php endif; ?>
            </a>
            <?php echo e($slot); ?>

        <?php endif; ?>
    <?php elseif($label): ?>
        <a <?php echo e($attributes->only((['class', 'href', 'target', 'wire:navigate', 'wire:navigate.hover', 'wire:current', 'wire:current.ignore']))->class([
            'min-w-max select-none',
            'menu-title' => $title
        ])->merge()); ?>>
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
<?php $component->withAttributes(['class' => 'h-lh']); ?>
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
            <?php elseif($icon): ?>
                <div <?php echo e($icon->attributes); ?>>
                <?php echo $icon->withAttributes($icon->attributes->getAttributes()); ?>

                </div>
            <?php endif; ?>
            <?php echo e($title); ?><?php echo e($label); ?>

        </a>
    <?php else: ?>
        <a <?php echo e($attributes->only((['class', 'href', 'target', 'wire:navigate', 'wire:navigate.hover', 'wire:current', 'wire:current.ignore']))->class([
            'min-w-max select-none',
            'menu-title' => $title
        ])->merge()); ?>>
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
<?php $component->withAttributes(['class' => 'h-lh']); ?>
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
            <?php elseif($icon): ?>
                <div <?php echo e($icon->attributes); ?>>
                <?php echo $icon->withAttributes($icon->attributes->getAttributes()); ?>

                </div>
            <?php endif; ?>
            <?php echo e($slot); ?>

        </a>
    <?php endif; ?>
    </li>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/caf3dcf95cd14c01dbf0cc8ffa057ce5.blade.php ENDPATH**/ ?>
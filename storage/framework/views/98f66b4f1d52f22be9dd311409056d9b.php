<?php foreach ((['id', 'showIndex', 'tabAttributes', 'vertical']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php
    $index = $showIndex?->increment();
?>
<label
    <?php echo e((gettype($label) === 'object' ? $label->attributes : $attributes->only(['style']))->class([
        'tab whitespace-nowrap has-checked:tab-active flex items-center',
        'rounded-b-none' => $slot->isNotEmpty(),
        'col-start-1' => $vertical,
    ])); ?>

>
    <input class="appearance-none" type="radio" name="<?php echo e($id); ?>" id="<?php echo e($id); ?>-<?php echo e($index); ?>" onfocus="this.blur()" <?php if($index === 1): ?> checked <?php endif; ?>/>
    <?php if($icon): ?>
        <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 me-2']); ?>
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
    <?php echo e($label); ?>

</label>
<?php if($slot->isNotEmpty()): ?>
<div
    <?php echo e($attributes->class([
        'tab-content w-full self-stretch order-1',      
        'col-start-2 row-span-3 h-auto' => $vertical,
        '-mt-px' => $vertical && $slot->isNotEmpty(),
    ])->merge($tabAttributes->getAttributes())); ?>

>
    <?php echo e($slot); ?>

</div>
<?php endif; ?>
<?php /**PATH /var/www/allyouneed.local/storage/framework/views/a45af888358eb22eefd692ac1df712f4.blade.php ENDPATH**/ ?>
<?php foreach ((['showIndex', 'showCondition', 'slideAttributes']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php
    $index = $showIndex?->increment();
?>
<div             
    <?php echo e($attributes->except(['class'])->class([
        'flex ' . $align => strlen($align) > 0,
        'relative'  => !$slideAttributes?->has('noDefaultClass'),
    ])->merge($slideAttributes?->except(['noDefaultClass'])->getAttributes() ?? [])); ?>

    <?php if($showCondition): ?>
        x-show="<?php echo e(eval($showCondition)); ?>"
    <?php endif; ?>
>
    <?php if(gettype($image) === 'object'): ?>
        <?php echo e($image); ?>

    <?php elseif($image): ?>
        <img src="<?php echo e($image); ?>" alt="" class="w-full"/>
    <?php endif; ?>
    <div <?php echo e($attributes->only(['class'])->class([
            'grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1',
            'absolute top-0 w-full h-full' => $image
        ])); ?>>
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/9b9faa8cc4c6eb99dc72a868a2c626ef.blade.php ENDPATH**/ ?>
<?php
    $must_prepend = $labelBefore !== null;
    if ($label && $must_prepend)
        throw new Exception('Cannot declare a label both before and after the toggle');
    
    if (!isset($label)) 
        $label = $labelBefore;
?>
<?php if($label): ?>
<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'group grid grid-cols-[auto_auto] items-center gap-1',
        'justify-between' => $must_prepend,
        'justify-start'   => !$must_prepend,
        'text-xl'         => $size === 'xl',
        'text-lg'         => $size === 'lg',
        'text-base'       => $size === 'md',
        'text-sm'         => $size === 'sm',
        'text-xs'         => $size === 'xs',
    ]); ?>"
>
    <?php if($title): ?>
    <header class="font-base text-lg col-span-full"><?php echo e($must_prepend); ?><?php echo e($title); ?></header>
    <?php endif; ?>
    <input id="<?php echo e($id); ?>"
        type="checkbox"
        name="<?php echo e($name); ?>"
        value="<?php echo e($value); ?>"
        <?php echo e($attributes->except(['type'])->class([
                'checkbox',
                'checkbox-neutral'   => ($type ?? $color) == 'neutral',
                'checkbox-primary'   => ($type ?? $color) == 'primary',
                'checkbox-secondary' => ($type ?? $color) === 'secondary',
                'checkbox-accent'    => ($type ?? $color) === 'accent',
                'checkbox-info'      => ($type ?? $color) === 'info',
                'checkbox-success'   => ($type ?? $color) === 'success',
                'checkbox-warning'   => ($type ?? $color) === 'warning',
                'checkbox-error'     => ($type ?? $color) === 'error',
                'checkbox-xl'        => $size === 'xl',
                'checkbox-lg'        => $size === 'lg',
                'checkbox-md'        => $size === 'md',
                'checkbox-sm'        => $size === 'sm',
                'checkbox-xs'        => $size === 'xs',
                'order-last'         => $must_prepend,
            ])
            ->merge()); ?>

    />
    <label for="<?php echo e($id); ?>"
        <?php echo e((gettype($label) === 'object' ? $label->attributes : $attributes)->except('wire:model')->class([
            'label label-text relative cursor-pointer select-none whitespace-nowrap',
        ])->merge()); ?>

    >
        <?php if($labelChecked): ?>
            <div class="inline group-has-checked:hidden"><?php echo e($label); ?></div>
            <div class="hidden group-has-checked:inline"><?php echo e($labelChecked); ?></div>
        <?php else: ?>
            <?php echo e($label); ?>

        <?php endif; ?>
    </label>
    </div>
<?php else: ?>
    <input id="<?php echo e($id); ?>"
        type="checkbox"
        name="<?php echo e($name); ?>"
        value="<?php echo e($value); ?>"
        <?php echo e($attributes
            ->class([
                'checkbox',
                'checkbox-neutral'   => ($type ?? $color) == 'neutral',
                'checkbox-primary'   => ($type ?? $color) == 'primary',
                'checkbox-secondary' => ($type ?? $color) === 'secondary',
                'checkbox-accent'    => ($type ?? $color) === 'accent',
                'checkbox-info'      => ($type ?? $color) === 'info',
                'checkbox-success'   => ($type ?? $color) === 'success',
                'checkbox-warning'   => ($type ?? $color) === 'warning',
                'checkbox-error'     => ($type ?? $color) === 'error',
                'checkbox-xl'        => $size === 'xl',
                'checkbox-lg'        => $size === 'lg',
                'checkbox-md'        => $size === 'md',
                'checkbox-sm'        => $size === 'sm',
                'checkbox-xs'        => $size === 'xs',
            ])
            ->merge()); ?>

    />
<?php endif; ?>
<?php /**PATH /var/www/allyouneed.local/storage/framework/views/9e7627ceb4ffacd60d6084117b58ba9b.blade.php ENDPATH**/ ?>
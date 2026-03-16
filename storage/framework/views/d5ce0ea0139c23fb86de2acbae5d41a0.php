<div <?php echo e($attributes->class([
        'card',
        'card-side' => $horizontal,
        'border-1 border-neutral'   => $color === 'neutral',
        'border-1 border-primary'   => $color === 'primary',
        'border-1 border-secondary' => $color === 'secondary',
        'border-1 border-accent'    => $color === 'accent',
        'border-1 border-info'      => $color === 'info',
        'border-1 border-success'   => $color === 'success',
        'border-1 border-warning'   => $color === 'warning',
        'border-1 border-error'     => $color === 'error',
        'card-xs'                   => $size === "xs",
        'card-sm'                   => $size === "sm",
        'card-md'                   => $size === "md",
        'card-lg'                   => $size === "lg",
        'card-xl'                   => $size === "xl",
    ])->merge()); ?>> 
    <?php if($figure): ?>
    <figure <?php echo e($figure->attributes->class([
        ])->merge()); ?>>
        <?php echo e($figure); ?>

    </figure>
    <?php endif; ?>
    <div class="card-body ayn-child:[:where(.card-actions)]:justify-end">
        <?php if($title): ?>
            <?php if(gettype($title) === 'string'): ?>
                <h2 class="card-title"><?php echo e($title); ?></h2>
            <?php else: ?>
                <h2 <?php echo e($title->attributes->class(["card-title"])->merge()); ?>><?php echo e($title); ?></h2>
            <?php endif; ?>
            <?php if($separators): ?>
                <hr class="mt-3 border-t-[length:var(--border)] border-base-content/10">
            <?php endif; ?>
        <?php endif; ?>
        
        <div <?php echo e($slot->attributes->class(['grow-1'])->merge()); ?>>
            <?php echo e($slot); ?>

        </div>
            
        <?php if($actions): ?>
            <?php if($separators): ?>
                <hr class="mt-3 border-t-[length:var(--border)] border-base-content/10">
            <?php endif; ?>
            <div <?php echo e($actions->attributes->class([
                'card-actions',
                'ayn-desc:[:where(button.btn)]:btn-neutral ayn-desc:[:where(button.btn)]:text-neutral-content'     => $color === 'neutral',
                'ayn-desc:[:where(button.btn)]:btn-primary ayn-desc:[:where(button.btn)]:text-primary-content'     => $color === 'primary',
                'ayn-desc:[:where(button.btn)]:btn-secondary ayn-desc:[:where(button.btn)]:text-secondary-content' => $color === 'secondary',
                'ayn-desc:[:where(button.btn)]:btn-accent ayn-desc:[:where(button.btn)]:text-accent-content'       => $color === 'accent',
                'ayn-desc:[:where(button.btn)]:btn-info ayn-desc:[:where(button.btn)]:text-info-content'           => $color === 'info',
                'ayn-desc:[:where(button.btn)]:btn-success ayn-desc:[:where(button.btn)]:text-success-content'     => $color === 'success',
                'ayn-desc:[:where(button.btn)]:btn-warning ayn-desc:[:where(button.btn)]:text-warning-content'     => $color === 'warning',
                'ayn-desc:[:where(button.btn)]:btn-error ayn-desc:[:where(button.btn)]:text-error-content'         => $color === 'error',
            ])->merge()); ?>>
                <?php echo e($actions); ?>

            </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/aa35514e3ff16dc1d230bf95ef02bbf3.blade.php ENDPATH**/ ?>
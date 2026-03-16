    <?php if(!$anchor): ?>
    <div
        <?php echo e($attributes->merge([
            'popovertarget' => $anchor ? 'popover-' . $anchor : null
        ])->except('class')); ?>

        <?php echo e($attributes->except('class')->class([
            'relative dropdown [&:not(details,.dropdown-open,.dropdown-hover:hover,:focus-within)>.dropdown-content]:hidden',
            'dropdown-hover'                    => $hover,
            'hover:[&>.dropdown-content]:block' => $hover,
            'dropdown-start'                    => $align === 'start',
            'dropdown-center'                   => $align === 'center',
            'dropdown-end'                      => $align === 'end',
            'dropdown-top'                      => $direction === 'top',
            'dropdown-bottom'                   => $direction === 'bottom',
            'dropdown-left'                     => $direction === 'left',
            'dropdown-right'                    => $direction === 'right',
            'contents'                          => $anchor
        ])); ?>

    >
    <div
        <?php echo e($trigger->attributes->class([
            'focus:pointer-events-none' => !$hover
        ])->merge([
            'tabindex' => 0
        ])); ?>

    >
        <?php echo e($trigger); ?>

    </div> 
    <?php else: ?>
    <button
        <?php echo e($trigger->attributes->class([
        ])->merge([
            'popovertarget' => 'popover-' . $anchor
        ])); ?>

    >
        <?php echo e($trigger); ?>

    </button>           
    <?php endif; ?>
    <div
        <?php echo e($attributes->class([
            'z-1000',
            'dropdown' => $anchor !== null,
            'dropdown-content absolute' => $anchor === null
        ])->merge([
            'tabindex' => -1,
            'id'       => $anchor ? 'popover-' . $anchor : null,
            'popover'  => $anchor ? '' : null,
            'style'    => $anchor ? 'position-anchor:' . $anchor . ';' : null
        ])); ?>

    >
        <?php echo e($slot); ?>

        </div>
    <?php if(!$anchor): ?>
    </div>
    <?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/7536e0ba530f353df57973a3c824328c.blade.php ENDPATH**/ ?>
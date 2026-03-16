<?php if ($transparent): ?>
    <?php echo e($slot); ?>

<?php else: ?>
    <?php
        $arr_position = $parse_position($position);
    ?>
    <div
        <?php echo e($attributes->except(['position', 'size'])->class([
            'indicator' => !$noIndicator,
            ])->merge()); ?>

    >
        <?php if(!$noIndicator && $indicator): ?>
            <div <?php echo e($indicator->attributes->except(['position', 'size'])->class([
                'flex justify-center items-center indicator-item',
                'indicator-top'    => in_array('top'   , $arr_position),
                'indicator-bottom' => in_array('bottom', $arr_position),
                'indicator-left'   => in_array('left'  , $arr_position),
                'indicator-right'  => in_array('right' , $arr_position),
                'indicator-start'  => in_array('start' , $arr_position),
                'indicator-end'    => in_array('end'   , $arr_position),
                'indicator-middle' => $arr_position != [] && !in_array('top', $arr_position)   && !in_array('bottom', $arr_position),
                'indicator-center' => $arr_position != [] && !in_array('start', $arr_position) && !in_array('end', $arr_position),
            ])); ?>

            class="indicator-item ">
                <?php echo e($indicator); ?>

            </div>
        <?php elseif(!$noIndicator): ?>
            <span 
                <?php echo e($attributes->except(['position', 'size'])->class([
                    'indicator-item status',
                    'indicator-top'    => in_array('top'   , $arr_position),
                    'indicator-bottom' => in_array('bottom', $arr_position),
                    'indicator-left'   => in_array('left'  , $arr_position),
                    'indicator-right'  => in_array('right' , $arr_position),
                    'indicator-start'  => in_array('start' , $arr_position),
                    'indicator-end'    => in_array('end'   , $arr_position),
                    'indicator-middle' => $arr_position != [] && !in_array('top', $arr_position)   && !in_array('bottom', $arr_position),
                    'indicator-center' => $arr_position != [] && !in_array('start', $arr_position) && !in_array('end', $arr_position),
                    'status-primary'   => $color === 'primary',
                    'status-secondary' => $color === 'secondary',
                    'status-accent'    => $color === 'accent',
                    'status-info'      => $color === 'info',
                    'status-success'   => $color === 'success',
                    'status-warning'   => $color === 'warning',
                    'status-error'     => $color === 'error',
                ])); ?>

            >
            </span>
        <?php endif; ?>
        <?php echo e($slot); ?>

    </div>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/70065f82bc061433780e8765da39d98c.blade.php ENDPATH**/ ?>
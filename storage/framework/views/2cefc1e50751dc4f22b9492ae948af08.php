<ul <?php echo e($attributes->class([
        'timeline [&>li:first-child>hr:first-child]:hidden [&>li:last-child>hr:last-child]:hidden',
        'grid grid-rows-[auto_auto_auto] justify-start *:row-span-full *:grid *:!grid-rows-subgrid' => $fix && !$vertical,
        'timeline-vertical' => $vertical,
        'grid grid-cols-[auto_auto_auto] justify-start gap-x-2 *:items-center *:col-span-full *:!grid-cols-subgrid [&>li>hr]:col-start-2' => $fix &&  $vertical,
        '[&_:is(.timeline-start,.timeline-end)]:mt-1' => $fix && $vertical && $iconsStart,
        'timeline-snap-icon' => $iconsStart
        ])->merge()); ?>>
    <?php echo e($slot); ?>

</ul><?php /**PATH /var/www/allyouneed.local/storage/framework/views/812a1d51958e1341e15d9070097e5f18.blade.php ENDPATH**/ ?>
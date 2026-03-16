<?php
    if (!$count)
        $count = $showIndex->value();
?>
<div <?php echo e($attributes->class(['overflow-hidden'])->merge()); ?>>
    <?php if (! $__env->hasRenderedOnce('a2774386-38bb-44d6-91a3-82f0bc6c0ee3')): $__env->markAsRenderedOnce('a2774386-38bb-44d6-91a3-82f0bc6c0ee3'); ?>
    <style>
        .carousel > div {
            --unit:     1s;

            --total: calc(var(--delay) + var(--duration) + var(--transition));
            --total-duration: calc(var(--total) * var(--unit));

            --delay-start: calc(var(--delay) / var(--total) * 100%);
            --transition-start: calc((var(--delay) + var(--transition)) / var(--total) * 100%);
            
            --timing: linear(0, 
                0 var(--delay-start), 
                1 var(--transition-start), 
                1);

            animation: sliderotation calc(var(--slides) * var(--total-duration)) steps(var(--slides)) calc(var(--duration) * var(--unit)) infinite,
                       var(--total-duration) var(--timing) infinite calc(var(--duration) * var(--unit)) smooth;
            animation-composition: add;
            transition: transform;
        }
        .carousel template {
            display: contents;
        }
        .carousel > div > *  {
            width: calc(100% / var(--slides_per_stop) - 1rem * (var(--slides_per_stop) - 1) / var(--slides_per_stop));
            flex: none;
        }
        @keyframes smooth {
            from { transform: translateX(0) }
            to   { transform: translateX(calc(-1 * (100% + 1rem) / var(--slides_per_stop))) }
        }
        @keyframes sliderotation {
            from { transform: translateX(0) }
            to   { transform: translateX(calc(-1 * var(--slides) * (100% + 1rem) / var(--slides_per_stop))) }
        }
    </style>
    <?php endif; ?>
    <div class="carousel w-full h-full overflow-visible p-0"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles([
            '--slides:' . ($slides ? count($slides) : $count),
            '--duration: ' . $timePerSlide,
            '--delay: 0' ,
            '--transition: '. $rotationTime
        ]) ?>"
        <?php if($slides): ?>
        x-data="{
            slides: <?php echo e(json_encode($slides)); ?>

        }"
        <?php endif; ?>
    >
        <div class="flex w-full flex-row gap-4 *:object-cover">
            <?php echo e($slot); ?>

            <?php echo e($slot); ?>

        </div>
    </div>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/5b5cbfa0b84e458a82f4c7d2dcf99a18.blade.php ENDPATH**/ ?>
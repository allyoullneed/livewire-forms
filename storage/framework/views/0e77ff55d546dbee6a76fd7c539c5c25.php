<div <?php echo e($attributes->except([
            'type', 'value', 'required', 'autocomplete'
        ])->whereDoesntStartWith('wire:model')->class([
    'flex flex-col w-full'
    ])->merge()); ?>>
<?php if(gettype($title) === 'object'): ?>
<header <?php echo e($title->attributes->class(['font-base text-lg'])->merge()); ?>><?php echo e($title); ?></header>
<?php elseif($title): ?>
<header class="font-base text-lg"><?php echo e($title); ?></header>
<?php endif; ?>
<label
    <?php echo e($attributes->except([
            'type', 'value', 'required', 'autocomplete'
        ])->whereDoesntStartWith('wire:model')->class([
            'flex gap-2 items-center w-full whitespace-nowrap',
        ])
        ->merge([   
        ])); ?>>

    <?php if(gettype($icon) === 'string'): ?>
        <div class="flex h-lh">
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        </div>
    <?php endif; ?>

    <?php if(gettype($label) === 'string'): ?>
        <div 
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'label-text basis-[max-content] whitespace-nowrap overflow-x-hidden text-ellipsis',  
                'text-xs' => $size === 'xs',
                'text-sm' => $size === 'sm',
                'text-lg' => $size === 'lg',
                'text-xl' => $size === 'xl',
            ]); ?>"
        >
            <?php echo e($label); ?>

        </div>
    <?php endif; ?>

    <?php if($showSteps): ?>
    <?php
        if (gettype($showSteps) === 'boolean')
            $showSteps = $step;
        if ($minor) {
            if (gettype($minor) === 'boolean') {
                $minor = $showSteps;
                $showSteps = 2 * $showSteps;
            }
        }
        else
            $minor = $showSteps;
        $s = $min + $showSteps;
    ?>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'w-full flex flex-col items-stretch gap-1',
                'range-xs'        => $size === 'xs',
                'range-sm'        => $size === 'sm',
                'range-md'        => $size !== 'xl' && $size !== 'lg' && $size !== 'sm' && $size !== 'xs',
                'range-lg'        => $size === 'lg',
                'range-xl'        => $size === 'xl',
            ]); ?>">
        <input
            <?php echo e($attributes->only(['name', 'value', 'required', 'autocomplete'])->merge([
                'type' => 'range',
                'min'  => $min,
                'max'  => $max,
                'step' => $step,
                'value' => $value,
            ])); ?>

            <?php echo e($attributes->whereStartsWith('wire:model')); ?>

            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'range peer',
                'range-primary'   => $color === 'primary',
                'range-secondary' => $color === 'secondary',
                'range-accent'    => $color === 'accent',
                'range-info'      => $color === 'info',
                'range-success'   => $color === 'success',
                'range-warning'   => $color === 'warning',
                'range-error'     => $color === 'error',
                'range-xs'        => $size === 'xs',
                'range-sm'        => $size === 'sm',
                'range-md'        => $size === 'md',
                'range-lg'        => $size === 'lg',
                'range-xl'        => $size === 'xl',
            ]); ?>"
        />
        <div 
            class="relative flex justify-between *:flex *:flex-col *:items-center *: *:h-[calc(.5rem+1lh)]"
            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                'margin-inline: calc(var(--range-thumb-size) / 2)'
            ]) ?>"
        >
        <div class="relative">
            <div class="w-px h-2 bg-base-content"></div>
            <span class="absolute top-2"><?php echo e($min); ?></span>
        </div>
        <?php for($m = $min + $minor; $m < $max; $m += $minor): ?>
            <?php if($m == $s): ?>
                <div class="absolute" style="left: <?php echo e(100 * ($m - $min) / ($max - $min)); ?>%">
                    <div class="w-px h-2 bg-base-content"></div>
                    <span class="absolute top-2"><?php echo e($m); ?></span>
                </div>
                <?php
                    $s += $showSteps;
                ?>
            <?php else: ?>
                <?php if($m > $s): ?>
                    <div class="absolute" style="left: <?php echo e(100 * ($s - $min) / ($max - $min)); ?>%">
                        <div class="w-px h-2 bg-base-content"></div>
                        <span class="absolute top-2"><?php echo e($s); ?></span>
                    </div>
                    <?php
                        $s += $showSteps;
                    ?>
                <?php endif; ?>
                <div class="absolute opacity-50" style="left: <?php echo e(100 * ($m - $min) / ($max - $min)); ?>%">
                    <div class="w-px h-2 bg-base-content"></div>
                    <span class="absolute top-2 text-xs"><?php echo e($m); ?></span>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
        <div class="relative">
            <div class="w-px h-2 bg-base-content"></div>
            <span class="absolute top-2"><?php echo e($max); ?></span>
        </div>
        </div>
    </div>
    <?php else: ?>
    <input
        <?php echo e($attributes->only(['name', 'value', 'required', 'autocomplete'])->merge([
                'type' => 'range',
                'min'  => $min,
                'max'  => $max,
                'step' => $step,
                'value' => $value,
                'placeholder' => $placeholder,
        ])); ?>

        <?php echo e($attributes->whereStartsWith('wire:model')); ?>

        class="<?php echo \Illuminate\Support\Arr::toCssClasses([    
            'range peer',
            'range-primary'   => $color === 'primary',
            'range-secondary' => $color === 'secondary',
            'range-accent'    => $color === 'accent',
            'range-info'      => $color === 'info',
            'range-success'   => $color === 'success',
            'range-warning'   => $color === 'warning',
            'range-error'     => $color === 'error',
            'range-xs'        => $size === 'xs',
            'range-sm'        => $size === 'sm',
            'range-md'        => $size === 'md',
            'range-lg'        => $size === 'lg',
            'range-xl'        => $size === 'xl',
        ]); ?>"
    />
    <?php endif; ?>

    <?php if(gettype($icon) === 'object'): ?>  
        <div <?php echo e($icon->attributes->class(['flex order-first'])); ?>>
            <?php echo e($icon); ?>

        </div>
    <?php endif; ?>

    <?php if(gettype($label) === 'object'): ?>
        <div <?php echo e($label->attributes->class([
            'label-text basis-[max-content] whitespace-nowrap overflow-x-hidden text-ellipsis order-first',             
            'text-xs' => $size === 'xs',
            'text-sm' => $size === 'sm',
            'text-lg' => $size === 'lg',
            'text-xl' => $size === 'xl',
            ])); ?>>
            <?php echo e($label); ?>

        </div>
    <?php endif; ?>

    <?php if($append): ?>
        <div <?php echo e((gettype($append) === 'object' ? $append->attributes : $attributes)->class([
            'label-text basis-[max-content] whitespace-nowrap overflow-x-hidden text-ellipsis',
            'text-xs' => $size === 'xs',
            'text-sm' => $size === 'sm',
            'text-lg' => $size === 'lg',
            'text-xl' => $size === 'xl',
            ])); ?>>
            <?php echo e($append); ?>

        </div>
    <?php endif; ?>

    <?php if($trailIcon): ?>
        <?php if(gettype($trailIcon) === 'string'): ?>
            <div class="flex h-lh order-last">
                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $trailIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
            </div>
        <?php elseif(gettype($trailIcon) === 'object'): ?>  
            <div <?php echo e($trailIcon->attributes->class(['flex order-last'])); ?>>
                <?php echo e($trailIcon); ?>

            </div>
        <?php endif; ?>
    <?php endif; ?>
    
    <?php echo e($slot); ?>


</label>

<?php if(gettype($helper) === 'object'): ?>
    <span <?php echo e($helper->attributes->class([
            'helper-text text-left text-sm text-gray-500',
        ])->merge()); ?>><?php echo e($helper); ?></span>
<?php elseif($helper): ?>
    <span class="helper-text text-left text-sm text-gray-500"><?php echo e($helper); ?></span>
<?php endif; ?>

<?php $__errorArgs = [$attributes->whereStartsWith('wire:model')->first()];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['type' => 'error','size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1 order-last h-[unset]']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
<?php echo e($message); ?></span> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php if($error): ?>
    <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['type' => 'error','size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1 order-last h-[unset]']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
<span class="block truncate"><?php echo e($error); ?></span> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php endif; ?>

</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/0d8b27bb440d27aa6460a722ce30686b.blade.php ENDPATH**/ ?>
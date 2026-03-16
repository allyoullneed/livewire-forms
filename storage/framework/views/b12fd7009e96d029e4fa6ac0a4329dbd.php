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
            'cursor-pointer'                                      => $type === 'color',
            'ps-0'                                                => $type  === 'color' && !$label && !$icon,
            'pe-0'                                                => $type  === 'color' && !$append && !$trailIcon,
            'input'                                               => $type  !== 'file',
            '!input-error'                                        => $type  !== 'file' && $errors->has($errorFieldName()),
            'input-neutral border-neutral outline-neutral!'       => $type  !== 'file' && $color === 'neutral',
            'input-primary border-primary outline-primary!'       => $type  !== 'file' && $color === 'primary',
            'input-secondary border-secondary outline-secondary!' => $type  !== 'file' && $color === 'secondary',
            'input-accent border-accent outline-accent!'          => $type  !== 'file' && $color === 'accent',
            'input-info border-info outline-info!'                => $type  !== 'file' && $color === 'info',
            'input-success border-success outline-success!'       => $type  !== 'file' && $color === 'success',
            'input-warning border-warning outline-warning!'       => $type  !== 'file' && $color === 'warning',
            'input-error border-error outline-error!'             => $type  !== 'file' && $color === 'error',
            'input-xs'                                            => $type  !== 'file' && $size === 'xs',
            'input-sm'                                            => $type  !== 'file' && $size === 'sm',
            'input-md'                                            => $type  !== 'file' && $size === 'md',
            'input-lg'                                            => $type  !== 'file' && $size === 'lg',
            'input-xl'                                            => $type  !== 'file' && $size === 'xl',
            'input-ghost'                                         => $ghost,
        ])
        ->merge([   
        ])); ?>

    <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
        x-data="{ length: 0, minlength: <?php echo e($minlength); ?>, maxlength: <?php echo e($maxlength); ?> }"
    <?php endif; ?>
    >

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
                'shrink'  => $type !== 'color', 
                'grow'    => $type === 'color',                        
                'text-xs' => $size === 'xs',
                'text-sm' => $size === 'sm',
                'text-lg' => $size === 'lg',
                'text-xl' => $size === 'xl',
            ]); ?>"
        >
            <?php echo e($label); ?>

        </div>
    <?php endif; ?>

    <input
        <?php echo e($attributes->only(['name', 'value', 'required', 'autocomplete'])->merge([
                'type' => $type,
                'placeholder' => $placeholder,
                'minlength' => $minlength > 0 ? $minlength : null,
                'maxlength' => $maxlength > 0 ? $maxlength : null,
        ])); ?>

        <?php echo e($attributes->whereStartsWith('wire:model')); ?>

        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'peer',
            'basis-1/4 grow'                                                                                                      => $type !== 'color',
            'basis-[2lh] shrink'                                                                                                  => $type === 'color',
            'input file-input px-0 border rounded-sm inline-flex items-center'                                                    => $type  === 'file',
            '!input-error'                                                                                                        => $type  === 'file' && $errors->has($errorFieldName()),
            'border-[color-mix(in_oklab,oklch(20%_.0132_233.32)_40%,#0000)]'                                                      => $type  === 'file' && $color === 'neutral',
            'input-primary file:rounded-none file:bg-primary file:text-primary-content border-primary outline-primary!'           => $type  === 'file' && $color === 'primary',
            'input-secondary file:rounded-none file:bg-secondary file:text-secondary-content border-secondary outline-secondary!' => $type  === 'file' && $color === 'secondary',
            'input-accent file:rounded-none file:bg-accent file:text-accent-content border-accent outline-accent!'                => $type  === 'file' && $color === 'accent',
            'input-info file:rounded-none file:bg-info file:text-info-content border-info outline-info!'                          => $type  === 'file' && $color === 'info',
            'input-success file:rounded-none file:bg-success file:text-success-content border-success outline-success!'           => $type  === 'file' && $color === 'success',
            'input-warning file:rounded-none file:bg-warning file:text-warning-content border-warning outline-warning!'           => $type  === 'file' && $color === 'warning',
            'input-error file:rounded-none file:bg-error file:text-error-content border-error outline-error!'                     => $type  === 'file' && $color === 'error',
            'input-xs'                                                                                                            => $type  === 'file' && $size === 'xs',
            'input-sm'                                                                                                            => $type  === 'file' && $size === 'sm',
            'input-md'                                                                                                            => $type  === 'file' && $size !== 'xs' && $size !== 'sm' && $size !== 'lg' && $size !== 'xl',
            'input-lg'                                                                                                            => $type  === 'file' && $size === 'lg',
            'input-xl'                                                                                                            => $type  === 'file' && $size === 'xl',
        ]); ?>"
        <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
            x-init="$nextTick(() => length = $el.value?.length ?? 0)"
            x-on:input="length = event.target.value.length"
        <?php endif; ?>
    />

    <?php if(gettype($icon) === 'object'): ?>  
        <div <?php echo e($icon->attributes->class(['flex order-first'])); ?>>
            <?php echo e($icon); ?>

        </div>
    <?php endif; ?>

    <?php if(gettype($label) === 'object'): ?>
        <div <?php echo e($label->attributes->class([
            'label-text basis-[max-content] whitespace-nowrap overflow-x-hidden text-ellipsis order-first',
            'shrink'  => $type !== 'color', 
            'grow'    => $type === 'color',               
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
            'shrink'  => $type !== 'color', 
            'grow'    => $type === 'color',
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


    <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
        <div class="relative flex size-6 items-center justify-center v-popper--has-tooltip">
            <svg class="absolute right-0 h-full w-full text-gray-200 dark:text-gray-700" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="8"></circle>
            </svg>
            <svg class="absolute right-0 h-full w-full -rotate-90" viewBox="0 0 100 100"
            :class="{
                'text-green-600':  length / maxlength < .5,
                'text-amber-400':  length / maxlength >= .5 && length / maxlength < .75,
                'text-orange-600': length / maxlength >= .75 && length / maxlength < .9,
                'text-red-600':    length / maxlength >= .9
            }">
                <circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="8" stroke-dasharray="251.2"
                    x-bind:stroke-dashoffset="(maxlength - length) / maxlength * 251.2" stroke-linecap="round"
                ></circle>
            </svg>
            <span x-text="minlength > length  ? length - minlength : (maxlength > length ? maxlength - length : null)" class="text-xs absolute"></span>
        </div>
    <?php endif; ?>

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

</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/8016ba6a2b156ba6f8ba80f51f99e732.blade.php ENDPATH**/ ?>
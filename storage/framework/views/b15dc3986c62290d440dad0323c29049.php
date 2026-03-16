<div <?php echo e($attributes->except(['type', 'value', 'required', 'rows', 'accept', 'wire:model'])->class([
    'relative flex flex-col w-full'
    ])->merge()); ?>>
<?php if(gettype($title) === 'object'): ?>
<header <?php echo e($title->attributes->class(['font-base text-lg'])->merge()); ?>><?php echo e($title); ?></header>
<?php elseif($title): ?>
<header class="font-base text-lg"><?php echo e($title); ?></header>
<?php endif; ?>
<label
    <?php echo e($attributes->except(['type', 'value', 'required', 'accept', 'wire:model'])->merge()); ?>

    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'flex flex-wrap gap-2 items-center w-full'
    ]); ?>"
    <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
        x-data="{ length: 0, minlength: <?php echo e($minlength); ?>, maxlength: <?php echo e($maxlength); ?> }"
    <?php endif; ?>
    >

    <?php if(gettype($icon) === 'string'): ?>
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-lh']); ?>
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

    <textarea
        <?php echo e($attributes->only(['name', 'value', 'required', 'rows', 'wire:model'])->class([
            'w-full textarea',
            'resize-none'                                                                          => $resize === 'none',
            'resize-y'                                                                             => $resize === 'vertical' || $resize === 'y',
            'resize-x'                                                                             => $resize === 'horizontal' || $resize === 'x',
            'resize'                                                                               => $resize === 'both',
            '!textarea-error'                                                                      => $errors->has($errorFieldName()),
            'textarea-neutral border-neutral! focus:outline-neutral! focus:shadow-neutral'         => $color === 'neutral',
            'textarea-primary border-primary! focus:outline-primary! focus:shadow-primary'         => $color === 'primary',
            'textarea-secondary border-secondary! focus:outline-secondary! focus:shadow-secondary' => $color === 'secondary',
            'textarea-accent border-accent! focus:outline-accent! focus:shadow-accent'             => $color === 'accent',
            'textarea-info border-info! focus:outline-info! focus:shadow-info'                     => $color === 'info',
            'textarea-success border-success! focus:outline-success! focus:shadow-success'         => $color === 'success',
            'textarea-warning border-warning! focus:outline-warning! focus:shadow-warning'         => $color === 'warning',
            'textarea-error border-error! focus:outline-error! focus:shadow-error'                 => $color === 'error',
            'textarea-xs'                                                                          => $size === 'xs',
            'textarea-sm'                                                                          => $size === 'sm',
            'textarea-md'                                                                          => $size === 'md',
            'textarea-lg'                                                                          => $size === 'lg',
            'textarea-xl'                                                                          => $size === 'xl',
        ])->merge([
                'placeholder' => $placeholder,
                'minlength' => $minlength > 0 ? $minlength : null,
                'maxlength' => $maxlength > 0 ? $maxlength : null,
        ])); ?>



        <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
            x-init="$nextTick(() => length = $el.value?.length ?? 0)"
            x-on:input="length = event.target.value.length"
        <?php endif; ?>
    ><?php echo e($slot); ?></textarea>


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

    <?php if(($minlength > 0 || $maxlength > 0) && $lengthIndicator): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'absolute flex size-6 items-center justify-center v-popper--has-tooltip',
            'bottom-2 right-2' => $resize !== 'none',
            'bottom-1 right-1' => $resize === 'none'
        ]); ?>">
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

</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/78924cbcc871ebc0081f0954a624c17e.blade.php ENDPATH**/ ?>
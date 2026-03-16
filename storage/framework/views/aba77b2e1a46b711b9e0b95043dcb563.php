<?php
    $must_prepend = $labelBefore !== null;
    if ($label && $must_prepend)
        throw new Exception('Cannot declare a label both before and after the toggle');
    
    if (!isset($label)) 
        $label = $labelBefore;
?>

<?php if($label): ?>
    <div <?php echo e($attributes->whereDoesntStartWith('wire:model')->except(['type', 'name', 'value', 'checked'])->class([
            'group grid grid-cols-[auto_1fr] items-center gap-x-2 gap-y-1 justify-start',
            'grid grid-cols-[auto_1fr] items-center gap-x-2 gap-y-1' => $label,
            'justify-between' => $must_prepend,
            'justify-start'   => !$must_prepend,
            'text-xl'         => $size === 'xl',
            'text-lg'         => $size === 'lg',
            'text-base'       => $size === 'md',
            'text-sm'         => $size === 'sm',
            'text-xs'         => $size === 'xs',
        ])); ?>

    >
        <?php if($title): ?>
            <header class="font-base text-lg col-span-full"><?php echo e($title); ?></header>
        <?php endif; ?>
        <label
            <?php echo e((gettype($label) === 'object' ? $label->attributes : $attributes->except(['type', 'name', 'value', 'checked', 'class']))->class([
                'label label-text flex items-center gap-1.5 relative cursor-pointer select-none',
            ])->merge()); ?>

        >
            <input id="<?php echo e($id); ?>" type="checkbox"
                value="<?php echo e($value); ?>"
                <?php echo e($attributes->except([
                    'type', 'class'
                    ])->class([
                        'toggle switch',
                        'outline-2 outline-offset-2 outline-error'   => $errors->has($errorFieldName()),
                        'toggle-neutral switch-neutral'     => ($type ?? $color) == 'neutral',
                        'toggle-primary switch-primary'     => ($type ?? $color) == 'primary',
                        'toggle-secondary switch-secondary' => ($type ?? $color) === 'secondary',
                        'toggle-accent switch-accent'       => ($type ?? $color) === 'accent',
                        'toggle-info switch-info'           => ($type ?? $color) === 'info',
                        'toggle-success switch-success'     => ($type ?? $color) === 'success',
                        'toggle-warning switch-warning'     => ($type ?? $color) === 'warning',
                        'toggle-error switch-error'         => ($type ?? $color) === 'error',
                        'toggle-xl switch-xl'               => $size === 'xl',
                        'toggle-lg switch-lg'               => $size === 'lg',
                        'toggle-md switch-md'               => $size === 'md',
                        'toggle-sm switch-sm'               => $size === 'sm',
                        'toggle-xs switch-xs'               => $size === 'xs',
                        'order-last'                        => $must_prepend,
                    ])->merge([
                        'checked' => $checked
                    ])); ?>

            />
            <?php if($labelChecked): ?>
                <div class="grid grid-cols-1">
                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'col-start-1 row-start-1 group-has-checked:opacity-0 transition-opacity duration-250',
                        'justify-self-end' => $must_prepend,
                    ]); ?>"><?php echo e($label); ?></span>
                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'col-start-1 row-start-1 group-not-has-checked:opacity-0 transition-opacity duration-250',
                        'justify-self-end' => $must_prepend,
                    ]); ?>"><?php echo e($labelChecked); ?></span>
                </div>
            <?php else: ?>
                <?php echo e($label); ?>

            <?php endif; ?>
        </label>
        <?php if(gettype($helper) === 'object'): ?>
            <span <?php echo e($helper->attributes->class([
                    'helper-text text-left text-sm text-gray-500 col-span-full',
                ])->merge()); ?>><?php echo e($helper); ?></span>
        <?php elseif($helper): ?>
            <span class="helper-text text-left text-sm text-gray-500 col-span-full"><?php echo e($helper); ?></span>
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
        
        <?php echo e($slot); ?>

    </div>
<?php else: ?>
    <div <?php echo e($attributes->whereDoesntStartWith('wire:model')->except(['type', 'name', 'value', 'checked'])->class([
            'group grid grid-cols-[auto_1fr] items-center justify-start'=> !$label,
            'grid grid-cols-[auto_1fr] items-center' => $label,
            'justify-between' => $must_prepend,
            'justify-start'   => !$must_prepend,
        ])); ?>

    >
        <?php if($title): ?>
            <header class="font-base text-lg col-span-full"><?php echo e($title); ?></header>
        <?php endif; ?>
        <input type="checkbox"
            value="<?php echo e($value); ?>"
            <?php echo e($attributes->class([
                    'toggle switch',
                    'ring-2 ring-offset-2 ring-error'   => $errors->has($errorFieldName()),
                    'toggle-neutral switch-neutral'     => ($type ?? $color) == 'neutral',
                    'toggle-primary switch-primary'     => $color == 'primary',
                    'toggle-secondary switch-secondary' => $color === 'secondary',
                    'toggle-accent switch-accent'       => $color === 'accent',
                    'toggle-info switch-info'           => $color === 'info',
                    'toggle-success switch-success'     => $color === 'success',
                    'toggle-warning switch-warning'     => $color === 'warning',
                    'toggle-error switch-error'         => $color === 'error',
                    'toggle-xl switch-xl'               => $size === 'xl',
                    'toggle-lg switch-lg'               => $size === 'lg',
                    'toggle-md switch-md'               => $size === 'md',
                    'toggle-sm switch-sm'               => $size === 'sm',
                    'toggle-xs switch-xs'               => $size === 'xs',
                ])->merge([
                    'checked' => $checked
                ])); ?>

        />

        <?php if(gettype($helper) === 'object'): ?>
            <span <?php echo e($helper->attributes->class([
                    'helper-text text-left text-sm text-gray-500 col-span-full',
                ])->merge()); ?>><?php echo e($helper); ?></span>
        <?php elseif($helper): ?>
            <span class="helper-text text-left text-sm text-gray-500 col-span-full"><?php echo e($helper); ?></span>
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
    </div>
<?php endif; ?>
<?php /**PATH /var/www/allyouneed.local/storage/framework/views/e34fa17be6e5c1ab3525b10df92de227.blade.php ENDPATH**/ ?>
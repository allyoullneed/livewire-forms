<?php
    $model = $attributes->whereStartsWith('wire:model');
    if ($model) {
        $model = substr($model, 2 + strpos($model, "="));
        $model = substr($model, 0, strlen($model) - 1);
    }
    else
        $model = $name
?>
<div 
    <?php echo e($attributes->except([
        'name', 'id', 'value', 'required'
    ])->whereDoesntStartWith('wire:model')->class(['flex flex-col'])->merge()); ?>

    x-data="{
        options: [],
        selectedOptions: [],
        init() {
            const selectElement = $el.querySelector('select');
            selectElement.querySelectorAll('option').forEach((option) => {
                option.addEventListener('mousedown', 
                    function (e) {
                        if (!e.shiftKey) {
                            e.preventDefault();
                            option.parentElement.focus();
                            $data.toggleOption(this.value);
                        }
                        return false;
                }, false );

                this.options.push({ text: option.innerText, value: (option.value ?? option.innerText) });
                if (option.selected || option.checked)
                    this.selectedOptions.push(option.value ?? option.innerText);
            });
            <?php if($model): ?>
            $nextTick(function() { $wire.entangle('<?php echo e($model); ?>'); });
            <?php endif; ?>
        },
        toggleOption(value) {
            <?php if($multiple): ?>
                const index = this.selectedOptions.findIndex((opt) => opt === value);
                if (index >= 0)
                    this.selectedOptions.splice(index, 1);
                else
                    this.selectedOptions.push(value);
            <?php else: ?>
                this.selectedOptions = [value];
            <?php endif; ?>
        },
        removeOption(value) {
            this.selectedOptions.splice(this.selectedOptions.findIndex((opt) => opt === value), 1);
        }
    }"
> 
    <?php if(gettype($title) === 'object'): ?>
    <header <?php echo e($title->attributes->class(['font-base text-lg'])->merge()); ?>><?php echo e($title); ?></header>
    <?php elseif($title): ?>
    <header class="font-base text-lg"><?php echo e($title); ?></header>
    <?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalfcb9bb5484cb02bfca228758d8a74d75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

         <?php $__env->slot('trigger', null, ['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'select cursor-pointer custom-multiselect select-header w-full',
                'select-neutral'   => $color === 'neutral',
                'select-primary'   => $color === 'primary',
                'select-secondary' => $color === 'secondary',
                'select-accent'    => $color === 'accent',
                'select-info'      => $color === 'info',
                'select-success'   => $color === 'success',
                'select-warning'   => $color === 'warning',
                'select-error'     => $color === 'error',
            ])),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles([ 
                'height: unset' => $maxRows > 1,
            ]))]); ?> 
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'relative h-full w-full py-1 flex gap-2 items-center-safe overflow-y-auto'
            ]); ?>">
                <?php if(gettype($icon) === 'object'): ?>
                    <div <?php echo e($icon->attributes->class(["h-lh aspect-square"])->merge()); ?>>
                    <?php echo e($icon); ?>

                    </div>
                <?php elseif(gettype($icon) === 'string'): ?>
                    <div class="h-lh aspect-square">
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
                    <div <?php echo e($attributes->class([
                        'label-text',
                        'text-xs' => $size === 'xs',
                        'text-sm' => $size === 'sm',
                        'text-lg' => $size === 'lg',
                        'text-xl' => $size === 'xl',
                        ])); ?>>
                        <?php echo e($label); ?>

                    </div>
                <?php endif; ?>
                <div class="w-full h-full relative flex items-center">
                    <?php if($placeholder): ?>
                        <span x-show="selectedOptions.length === 0"
                        class="absolute text-current/50 select-none"><?php echo e($placeholder); ?></span>
                    <?php endif; ?>
                    <?php if($multiple): ?>
                        <div
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'row-start-1 flex flex-wrap gap-2 pillbox overflow-auto items-center',
                                'col-start-1' => $label === null,
                                'col-start-2' => $label !== null,
                            ]); ?>"
                            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                                'min-height: calc(6 * var(--size-selector) + 2 * var(--spacing)); max-height: calc(' . (6 * $maxRows) . ' * var(--size-selector) + ' . (2 * ($maxRows - 1)) . ' * var(--spacing))' => $maxRows > 1
                            ]) ?>">
                            <template x-for="option in selectedOptions">
                                <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => $color] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@mousedown.prevent' => '','class' => 'pe-0']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                     <?php $__env->slot('slot', null, ['class' => 'flex items-center']); ?> 
                                        <span x-text="options.find((opt) => opt.value === option)?.text"></span>
                                        <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['color' => $color,'size' => 'xs'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['noSpinner' => true,'@click.stop' => '$event.stopPropagation(); $event.preventDefault(); removeOption(option)','class' => 'max-h-full aspect-square pill-remove btn-circle shadow-none outline-none','style' => 'pointer-events:initial','value' => '${option}']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
✕ <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                                     <?php $__env->endSlot(); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
                            </template>
                        </div>
                    <?php else: ?>
                        <span x-text="options.find((opt) => opt.value === selectedOptions[0])?.text"></span>
                    <?php endif; ?>
                </div>
            </div>
         <?php $__env->endSlot(); ?>

        <select multiple
            x-model="selectedOptions"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'w-full h-[unset] mt-1 select options-container [&>option+option]:mt-1',
                'select-neutral [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-neutral),var(--color-neutral))] [&_option:checked]:text-neutral-content'         => $color === 'neutral',
                'select-primary [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-primary),var(--color-primary))] [&_option:checked]:text-primary-content'         => $color === 'primary',
                'select-secondary [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-secondary),var(--color-secondary))] [&_option:checked]:text-secondary-content' => $color === 'secondary',
                'select-accent [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-accent),var(--color-accent))] [&_option:checked]:text-accent-content'             => $color === 'accent',
                'select-info [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-info),var(--color-info))] [&_option:checked]:text-info-content'                     => $color === 'info',
                'select-success [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-success),var(--color-success))] [&_option:checked]:text-success-content'         => $color === 'success',
                'select-warning [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-warning),var(--color-warning))] [&_option:checked]:text-warning-content'         => $color === 'warning',
                'select-error [&_option:checked]:bg-[linear-gradient(to_bottom,var(--color-error),var(--color-error))] [&_option:checked]:text-error-content'                 => $color === 'error',
            ]); ?>"
            <?php if($rows || count($options) > 0): ?>
                size="<?php echo e($rows ?? min(12, count($options))); ?>"
            <?php endif; ?>
            <?php echo e($attributes->only(['name', 'id', 'required'])); ?>

            <?php echo e($attributes->whereStartsWith('wire:model')); ?>

        >
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <option value="<?php echo e($value); ?>"><?php echo e($label ?? $value); ?></option>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <?php echo e($slot); ?>

        </select>
        
        <?php if(gettype($label) === 'object'): ?>
        <div <?php echo e($label->attributes->class([
            'label-text flex order-first',                
            'text-xs' => $size === 'xs',
            'text-sm' => $size === 'sm',
            'text-lg' => $size === 'lg',
            'text-xl' => $size === 'xl',
            ])); ?>

        >
            <?php echo e($label); ?>

        </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75)): ?>
<?php $attributes = $__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75; ?>
<?php unset($__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfcb9bb5484cb02bfca228758d8a74d75)): ?>
<?php $component = $__componentOriginalfcb9bb5484cb02bfca228758d8a74d75; ?>
<?php unset($__componentOriginalfcb9bb5484cb02bfca228758d8a74d75); ?>
<?php endif; ?>

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

</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/f30e7b6e3a3ce617e44ff0a547c5097b.blade.php ENDPATH**/ ?>
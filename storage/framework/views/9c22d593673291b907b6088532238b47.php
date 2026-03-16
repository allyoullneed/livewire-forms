<div
    <?php echo e($attributes->class([
        'flex flex-col'
    ])->merge()); ?>

    x-data="{
        id: '<?php echo e($id); ?>',
        value: '',
        inputs: [],
        init() {
            $nextTick(() => {
                document.getElementById(this.id).addEventListener('paste', (e) => {
                    const paste = (e.clipboardData || window.clipboardData).getData('text');

                        for (var i = 0; i < <?php echo e($length); ?>; i++) {
                        this.inputs[i] = paste[i];
                    }

                    e.preventDefault()
                    this.handlePin()
                })
            })
        },
        next(el) {
            this.handlePin()

            if (el.value.length == 0) {
                return
            }

            if (el.nextElementSibling) {
                el.nextElementSibling.focus()
                el.nextElementSibling.select()
            }
        },
        remove(el, i) {
            this.inputs[i] = ''
            this.handlePin()

            if (el.previousElementSibling) {
                el.previousElementSibling.focus()
                el.previousElementSibling.select()
            }
        },
        handlePin() {
            this.value = this.inputs.join('')

            this.value.length === <?php echo e($length); ?>

                ? this.$dispatch('completed', this.value)
                : this.$dispatch('incomplete', this.value)
        }
}"
>
    <?php if(gettype($title) === 'object'): ?>
    <header <?php echo e($title->attributes->class(['font-base text-lg'])->merge()); ?>><?php echo e($title); ?></header>
    <?php elseif($title): ?>
    <header class="font-base text-lg"><?php echo e($title); ?></header>
    <?php endif; ?>
    
    <div 
        id="<?php echo e($id); ?>"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(["flex items-center justify-start", "join" => $noGap, "gap-3" => !$noGap]); ?>"
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
            <div class="label-text">
                <?php echo e($label); ?>

            </div>
        <?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = range(0, $length - 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <input
                style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                    $hide ? "text-security: $hideType;
                            -webkit-text-security: $hideType;
                            -moz-text-security $hideType;
                            " : "",
                ]) ?>"
                id="<?php echo e($id); ?>-<?php echo e($i); ?>"
                maxlength="1"
                x-model="inputs[<?php echo e($i); ?>]"
                @keydown.space.prevent
                @keydown.backspace.prevent="remove($event.target, <?php echo e($i); ?>)"
                @input="next($event.target)"
                <?php if($numeric): ?>
                    inputmode="numeric"
                    x-mask="9"
                <?php endif; ?>
                <?php echo e($attributes->except(['name', 'color'])->whereDoesntStartWith('wire')->class([
                        'peer input input-border min-w-6 max-w-12 p-0 font-bold text-xl text-center',
                        'join-item' => $noGap,
                        'input-primary border-primary outline-primary!'       => $color === 'primary',
                        'input-secondary border-secondary outline-secondary!' => $color === 'secondary',
                        'input-accent border-accent outline-accent!'          => $color === 'accent',
                        'input-info border-info outline-info!'                => $color === 'info',
                        'input-success border-success outline-success!'       => $color === 'success',
                        'input-warning border-warning outline-warning!'       => $color === 'warning',
                        'input-error border-error outline-error!'             => $color === 'error',
                    ])->merge(['type' => 'text'])); ?>

            />
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        <?php if(gettype($icon) === 'object'): ?>  
        <div <?php echo e($icon->attributes->class(['flex order-first'])); ?>>
            <?php echo e($icon); ?>

        </div>
        <?php endif; ?>
        <?php if(gettype($label) === 'object'): ?>
        <div <?php echo e($label->attributes->class(['label-text flex order-first'])); ?>>
            <?php echo e($label); ?>

        </div>
        <?php endif; ?>
        <?php echo e($slot); ?>

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
    </div>
    <input <?php echo e($attributes->only(['name'])); ?>" class="hidden" x-bind:value="value"/>

    <?php if(gettype($helper) === 'object'): ?>
        <span <?php echo e($helper->attributes->class([
                'helper-text text-left text-sm text-gray-500',
            ])->merge()); ?>><?php echo e($helper); ?></span>
    <?php elseif($helper): ?>
        <span class="helper-text text-left text-sm text-gray-500"><?php echo e($helper); ?></span>
    <?php endif; ?>

</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/568ba2ca632a08e8cbc34a43eecbfdc5.blade.php ENDPATH**/ ?>
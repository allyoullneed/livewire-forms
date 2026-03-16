<div x-data="{
        notifications: [],
        displayDuration: <?php echo e($duration); ?>,

        addNotification({ type = 'info', variant = null, sender = null, title = null, message = null, html = null}) {
            const id = Date.now()
            const notification = html ? { id, html } : { id, type, variant, sender, title, message };

            // Keep only the most recent 20 notifications
            if (this.notifications.length >= 20) {
                this.notifications.splice(0, this.notifications.length - 19)
            }

            // Add the new notification to the notifications stack
            this.notifications.push(notification)
        },

        removeNotification(id) {
            setTimeout(() => {
                this.notifications = this.notifications.filter(
                    (notification) => notification.id !== id,
                )
            }, 400);
        },
    }" x-on:<?php echo e($listenTo ?? 'notify'); ?>.window="addNotification({
            type: $event.detail.type,
            variant: $event.detail.variant,
            sender: $event.detail.sender,
            title: $event.detail.title,
            message: $event.detail.message,
            html: $event.detail.html,
        })">

    <div x-on:mouseenter="$dispatch('pause-auto-dismiss')" x-on:mouseleave="$dispatch('resume-auto-dismiss')" 
        <?php echo e($attributes->class([
            'group pointer-events-none fixed inset-x-8 z-999 flex max-w-full flex-col gap-2 bg-transparent px-6 py-6'
        ])->merge()); ?>

    >
        <template x-for="(notification, index) in notifications" x-bind:key="notification.id">  
            <div>
                <template x-if="notification.html">
                    <div
                        class="flex pointer-events-auto relative transition duration-300 ease-in-out"
                        x-data="{ isVisible: false, timeout: null }"
                        x-cloak x-show="isVisible"
                        x-on:pause-auto-dismiss.window="clearTimeout(timeout)"
                        x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)"
                        x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))"
                        x-transition:enter="transition duration-300 ease-out"
                        x-transition:enter-end="translate-y-0"
                        x-transition:enter-start="translate-y-8"
                        x-transition:leave="transition duration-300 ease-in"
                        x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24"
                        x-transition:leave-start="translate-x-0 opacity-100"
                    >
                        <div x-html="notification.html"></div>
                        <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '✕'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-0 ml-1 shadow-none aspect-square rounded-full','aria-label' => 'dismiss notification','x-on:click' => 'isVisible = false; removeNotification(notification.id)']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                    </div>
                </template>
                <template x-if="!notification.html">     
                    <?php if (isset($component)) { $__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pointer-events-auto relative flex flex-row flex-nowrap gap-2',':class' => '[
                            notification.variant === \'soft\' ? \'alert-soft\' : \'\',
                            notification.variant === \'outline\' ? \'bg-base-100\' : \'\',
                            notification.type === \'info\' ? \'alert-info\' : \'\',
                            notification.type === \'success\' ? \'alert-success\' : \'\',
                            notification.type === \'warning\' ? \'alert-warning\' : \'\',
                            notification.type === \'error\' ? \'alert-error\' : \'\',
                            notification.variant === \'outline\' && notification.type === \'info\' ? \'*:text-info\' : \'\',
                            notification.variant === \'outline\' && notification.type === \'success\' ? \'*:text-success\' : \'\',
                            notification.variant === \'outline\' && notification.type === \'warning\' ? \'*:text-warning\' : \'\',
                            notification.variant === \'outline\' && notification.type === \'error\' ? \'*:text-error\' : \'\',
                        ]','x-data' => '{ isVisible: false, timeout: null }','x-show' => 'isVisible','x-cloak' => true,'x-on:pause-auto-dismiss.window' => 'clearTimeout(timeout)','x-on:resume-auto-dismiss.window' => ' timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)','x-init' => '$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))','x-transition:enter' => 'transition duration-300 ease-out','x-transition:enter-end' => 'translate-y-0','x-transition:enter-start' => 'translate-y-8','x-transition:leave' => 'transition duration-300 ease-in','x-transition:leave-end' => '-translate-x-24 opacity-0 md:translate-x-24','x-transition:leave-start' => 'translate-x-0 opacity-100']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                         <?php $__env->slot('title', null, ['x-show' => 'notification.title','x-text' => 'notification.title']); ?>  <?php $__env->endSlot(); ?>
                         <?php $__env->slot('description', null, ['class' => 'pe-12','x-show' => 'notification.message']); ?> 
                            <div x-show="notification.sender" class="block font-bold mt-2">
                                <img alt="Avatar" x-bind:src="notification.sender?.avatar" class="size-8 rounded-full mr-2 inline-block align-middle"/>
                                <span x-text="notification.sender?.name"></span>
                            </div>
                            <span x-html="notification.message"></span>
                            <div class="absolute inset-0">
                                <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '✕'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([':class' => '[
                                        notification.variant ? \'btn-\' + notification.variant : \'\',
                                        notification.type    ? \'btn-\' + notification.type : \'\'
                                    ]','class' => 'btn-circle border-0 ml-auto shadow-none absolute top-1/2 end-1 inset-e-1 -translate-y-1/2','aria-label' => 'dismiss notification','x-on:click' => 'isVisible = false; removeNotification(notification.id)']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $attributes = $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2)): ?>
<?php $component = $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2; ?>
<?php unset($__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2); ?>
<?php endif; ?>
                            </div>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d)): ?>
<?php $attributes = $__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d; ?>
<?php unset($__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d)): ?>
<?php $component = $__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d; ?>
<?php unset($__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d); ?>
<?php endif; ?>
                </template>

            </div>
        </template>
    </div>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/76dd1967f6c55963fabf2ded03f9c1e5.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal593e60040076db490d3b551a4c5decf6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593e60040076db490d3b551a4c5decf6 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'self-end bg-base-200 xl:w-160 border-1 border-base-300']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

     <?php $__env->slot('title', null, ['class' => 'text-xl','style' => 'font-variant-caps: small-caps']); ?> Today's schedule <?php $__env->endSlot(); ?>
    <div class="grid grid-cols-[auto_1fr] xl:grid-cols-[auto_1fr_auto_auto] gap-4">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <span class="min-w-0 text-lg small-caps"><?php echo e($meeting['start']); ?></span>
            <div class="min-w-0 flex flex-col whitespace-nowrap">
                <span class="text-lg font-bolder"><?php echo e($meeting['title']); ?></span>
                <span class="text-base-content/75"><?php echo e($meeting['description']); ?></span>
            </div>
            <div class="min-w-0 avatar-group items-center -space-x-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = array_slice($meeting['attendees'], 0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <?php if($attendee && isset($attendees[$attendee])): ?>
                        <?php if (isset($component)) { $__componentOriginal4a4cad661272f5dc3c922190be607b89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4cad661272f5dc3c922190be607b89 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Avatar::resolve(['picture' => '/people/fake/'.e($attendee).'.webp'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Avatar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor pointer hover:z-1 size-12 rounded-full '.e($attendees[$attendee]).'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4cad661272f5dc3c922190be607b89)): ?>
<?php $attributes = $__attributesOriginal4a4cad661272f5dc3c922190be607b89; ?>
<?php unset($__attributesOriginal4a4cad661272f5dc3c922190be607b89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4cad661272f5dc3c922190be607b89)): ?>
<?php $component = $__componentOriginal4a4cad661272f5dc3c922190be607b89; ?>
<?php unset($__componentOriginal4a4cad661272f5dc3c922190be607b89); ?>
<?php endif; ?>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginal4a4cad661272f5dc3c922190be607b89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4cad661272f5dc3c922190be607b89 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Avatar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Avatar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor pointer hover:z-1    text-base-100']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                             <?php $__env->slot('picture', null, []); ?> 
                                <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'icon-account_circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-base-content size-12']); ?>
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
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4cad661272f5dc3c922190be607b89)): ?>
<?php $attributes = $__attributesOriginal4a4cad661272f5dc3c922190be607b89; ?>
<?php unset($__attributesOriginal4a4cad661272f5dc3c922190be607b89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4cad661272f5dc3c922190be607b89)): ?>
<?php $component = $__componentOriginal4a4cad661272f5dc3c922190be607b89; ?>
<?php unset($__componentOriginal4a4cad661272f5dc3c922190be607b89); ?>
<?php endif; ?>
                    <?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <?php if(count($meeting['attendees']) > 4): ?>
                    <div class="min-w-0 avatar avatar-placeholder">
                        <div class="bg-neutral text-neutral-content size-12 font-bold">+<?php echo e(count($meeting['attendees']) - 4); ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (isset($component)) { $__componentOriginal30a895b5a273443806b56ec1f117a21f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30a895b5a273443806b56ec1f117a21f = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Toggle::resolve(['labelBefore' => 'Won\'t attend','labelChecked' => 'Will attend','checked' => $meeting['attending'] ? 'checked' : false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Toggle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-w-0 justify-self-end']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30a895b5a273443806b56ec1f117a21f)): ?>
<?php $attributes = $__attributesOriginal30a895b5a273443806b56ec1f117a21f; ?>
<?php unset($__attributesOriginal30a895b5a273443806b56ec1f117a21f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30a895b5a273443806b56ec1f117a21f)): ?>
<?php $component = $__componentOriginal30a895b5a273443806b56ec1f117a21f; ?>
<?php unset($__componentOriginal30a895b5a273443806b56ec1f117a21f); ?>
<?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
     </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal593e60040076db490d3b551a4c5decf6)): ?>
<?php $attributes = $__attributesOriginal593e60040076db490d3b551a4c5decf6; ?>
<?php unset($__attributesOriginal593e60040076db490d3b551a4c5decf6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal593e60040076db490d3b551a4c5decf6)): ?>
<?php $component = $__componentOriginal593e60040076db490d3b551a4c5decf6; ?>
<?php unset($__componentOriginal593e60040076db490d3b551a4c5decf6); ?>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/5c4d86ea2ccf7e66a9197fddf4fcc93b.blade.php ENDPATH**/ ?>
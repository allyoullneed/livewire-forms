<div class="w-full max-w-240 grid grid-cols-1 lg:grid-cols-2 gap-4">
  <?php if (isset($component)) { $__componentOriginala28c9558338032bd0d754b28866f7b92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala28c9558338032bd0d754b28866f7b92 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\SkewedGallery::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('skewed-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\SkewedGallery::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-h-80 h-full gap-[3px] *:hover:w-90 md:*:hover:w-80 xl:*:hover:w-60 *:duration-500 rounded-lg']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

	<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = ['spring', 'summer', 'autumn', 'winter']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
	<img class="h-full" src="assets/seasons/<?php echo e($season); ?>1.webp"/>
	<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala28c9558338032bd0d754b28866f7b92)): ?>
<?php $attributes = $__attributesOriginala28c9558338032bd0d754b28866f7b92; ?>
<?php unset($__attributesOriginala28c9558338032bd0d754b28866f7b92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala28c9558338032bd0d754b28866f7b92)): ?>
<?php $component = $__componentOriginala28c9558338032bd0d754b28866f7b92; ?>
<?php unset($__componentOriginala28c9558338032bd0d754b28866f7b92); ?>
<?php endif; ?>

  <?php if (isset($component)) { $__componentOriginalf360a863628add13599dbe5e37b92553 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf360a863628add13599dbe5e37b92553 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Carousel::resolve(['timePerSlide' => '3','count' => '20'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Carousel::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-h-80 h-full rounded-box [--slides_per_stop:1]']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

	<?php for($i = 2; $i <= 6; $i++): ?>
		<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = ['spring', 'summer', 'autumn', 'winter']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
		  <img src="assets/seasons/<?php echo e($season); ?><?php echo e($i); ?>.webp"/>
		<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
	<?php endfor; ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf360a863628add13599dbe5e37b92553)): ?>
<?php $attributes = $__attributesOriginalf360a863628add13599dbe5e37b92553; ?>
<?php unset($__attributesOriginalf360a863628add13599dbe5e37b92553); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf360a863628add13599dbe5e37b92553)): ?>
<?php $component = $__componentOriginalf360a863628add13599dbe5e37b92553; ?>
<?php unset($__componentOriginalf360a863628add13599dbe5e37b92553); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/9bcf34b1e41b8716ea10d080040c33b9.blade.php ENDPATH**/ ?>
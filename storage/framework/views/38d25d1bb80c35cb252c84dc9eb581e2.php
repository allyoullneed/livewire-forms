<?php
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
?>

<?php if (isset($component)) { $__componentOriginal770f3d818ec521dcc45204fe12979db1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal770f3d818ec521dcc45204fe12979db1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Indicator::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Indicator::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

     <?php $__env->slot('indicator', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '✕','size' => 'sm','color' => 'error'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-circle shadow-none','onclick' => 'commentModal.close()']); ?>
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
     <?php $__env->endSlot(); ?>
    <form wire:submit="">
        <?php if (isset($component)) { $__componentOriginal593e60040076db490d3b551a4c5decf6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593e60040076db490d3b551a4c5decf6 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-base-100 w-100 flex flex-col items-stretch','description' => 'You have just opened a modal dialog!']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('title', null, ['class' => '!text-lg']); ?> 
                Leave a comment on the homepage
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('slot', null, ['class' => 'flex flex-col items-stretch gap-2']); ?> 
                <?php if (isset($component)) { $__componentOriginal770f3d818ec521dcc45204fe12979db1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal770f3d818ec521dcc45204fe12979db1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Indicator::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Indicator::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                     <?php $__env->slot('indicator', null, ['class' => 'me-4 mt-[0.5]']); ?> <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => 'error','size' => 'xs'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Required <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?> <?php $__env->endSlot(); ?>
                    <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['placeholder' => 'Your name','icon' => 'heroicon-s-user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'name','max-length' => '50','required' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $attributes = $__attributesOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__attributesOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $component = $__componentOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__componentOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['placeholder' => 'Your job position or title','icon' => 'heroicon-s-briefcase'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'job','max-length' => '50']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['type' => 'url','placeholder' => 'Link to your profile or website','icon' => 'heroicon-o-globe-alt'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'link','max-length' => '50']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal770f3d818ec521dcc45204fe12979db1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal770f3d818ec521dcc45204fe12979db1 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Indicator::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Indicator::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                     <?php $__env->slot('indicator', null, ['class' => 'me-4 mt-[0.5]']); ?> <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['color' => 'error','size' => 'xs'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Required <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $attributes = $__attributesOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__attributesOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d982f175a42555efb3431339cd5cb9c)): ?>
<?php $component = $__componentOriginal9d982f175a42555efb3431339cd5cb9c; ?>
<?php unset($__componentOriginal9d982f175a42555efb3431339cd5cb9c); ?>
<?php endif; ?> <?php $__env->endSlot(); ?>
                    <?php if (isset($component)) { $__componentOriginalb99b99631def9c9c20216022ea09a175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb99b99631def9c9c20216022ea09a175 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\TextArea::resolve(['resize' => 'none','maxlength' => '200','lengthIndicator' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\TextArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'message','spellcheck' => 'true','class' => 'col-span-full','rows' => '5','required' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb99b99631def9c9c20216022ea09a175)): ?>
<?php $attributes = $__attributesOriginalb99b99631def9c9c20216022ea09a175; ?>
<?php unset($__attributesOriginalb99b99631def9c9c20216022ea09a175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb99b99631def9c9c20216022ea09a175)): ?>
<?php $component = $__componentOriginalb99b99631def9c9c20216022ea09a175; ?>
<?php unset($__componentOriginalb99b99631def9c9c20216022ea09a175); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $attributes = $__attributesOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__attributesOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $component = $__componentOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__componentOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['type' => 'file'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $attributes = $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__attributesOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb)): ?>
<?php $component = $__componentOriginal96148f61cfb345d4231e89b65b9f59bb; ?>
<?php unset($__componentOriginal96148f61cfb345d4231e89b65b9f59bb); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('actions', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => 'Post'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal593e60040076db490d3b551a4c5decf6)): ?>
<?php $attributes = $__attributesOriginal593e60040076db490d3b551a4c5decf6; ?>
<?php unset($__attributesOriginal593e60040076db490d3b551a4c5decf6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal593e60040076db490d3b551a4c5decf6)): ?>
<?php $component = $__componentOriginal593e60040076db490d3b551a4c5decf6; ?>
<?php unset($__componentOriginal593e60040076db490d3b551a4c5decf6); ?>
<?php endif; ?>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $attributes = $__attributesOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__attributesOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal770f3d818ec521dcc45204fe12979db1)): ?>
<?php $component = $__componentOriginal770f3d818ec521dcc45204fe12979db1; ?>
<?php unset($__componentOriginal770f3d818ec521dcc45204fe12979db1); ?>
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/livewire/views/f25fbd24.blade.php ENDPATH**/ ?>
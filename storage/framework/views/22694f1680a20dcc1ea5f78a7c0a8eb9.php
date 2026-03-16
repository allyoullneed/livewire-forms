<?php
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use App\Mail\RegistrationCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
?>

<?php if (isset($component)) { $__componentOriginal593e60040076db490d3b551a4c5decf6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593e60040076db490d3b551a4c5decf6 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Card::resolve(['title' => 'Login / Register'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class(['card flex flex-col gap-2 bg-base-200 max-w-128 mx-auto'])->merge())]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

     <?php $__env->slot('title', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalfcb9bb5484cb02bfca228758d8a74d75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfcb9bb5484cb02bfca228758d8a74d75 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Dropdown::resolve(['hover' => true,'direction' => 'right'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-2 text-nowrap text-xs bg-base-100 p-2 rounded-sm border-1 border-info']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('trigger', null, ['class' => 'cursor-pointer','style' => 'font-variant-caps: small-caps;']); ?> Login / Register <?php $__env->endSlot(); ?>
            This is a mock form.<br/>You can't actually log in nor register; no mail will be sent and your address won't be saved.
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
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('slot', null, ['class' => 'flex flex-col items-stretch justify-between']); ?> 
        <?php if (isset($component)) { $__componentOriginala8824dd3612cc9b593436265861465ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8824dd3612cc9b593436265861465ef = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Tabs::resolve(['variant' => 'border'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Tabs::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


            <?php if (isset($component)) { $__componentOriginal305848032b002df02cfc83f463d777f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal305848032b002df02cfc83f463d777f5 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Tab::resolve(['label' => 'Log in','icon' => 'heroicon-o-users'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Tab::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'login-tab','class' => 'p-4','checked' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($__livewire)) echo $__livewire->renderIslandDirective(token: 'a73f1d05-1'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal305848032b002df02cfc83f463d777f5)): ?>
<?php $attributes = $__attributesOriginal305848032b002df02cfc83f463d777f5; ?>
<?php unset($__attributesOriginal305848032b002df02cfc83f463d777f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal305848032b002df02cfc83f463d777f5)): ?>
<?php $component = $__componentOriginal305848032b002df02cfc83f463d777f5; ?>
<?php unset($__componentOriginal305848032b002df02cfc83f463d777f5); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal305848032b002df02cfc83f463d777f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal305848032b002df02cfc83f463d777f5 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Tab::resolve(['label' => 'Sign up','icon' => 'heroicon-o-user-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Tab::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'register-tab','class' => 'p-4']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($__livewire)) echo $__livewire->renderIslandDirective(token: 'a73f1d05-2'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal305848032b002df02cfc83f463d777f5)): ?>
<?php $attributes = $__attributesOriginal305848032b002df02cfc83f463d777f5; ?>
<?php unset($__attributesOriginal305848032b002df02cfc83f463d777f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal305848032b002df02cfc83f463d777f5)): ?>
<?php $component = $__componentOriginal305848032b002df02cfc83f463d777f5; ?>
<?php unset($__componentOriginal305848032b002df02cfc83f463d777f5); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8824dd3612cc9b593436265861465ef)): ?>
<?php $attributes = $__attributesOriginala8824dd3612cc9b593436265861465ef; ?>
<?php unset($__attributesOriginala8824dd3612cc9b593436265861465ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8824dd3612cc9b593436265861465ef)): ?>
<?php $component = $__componentOriginala8824dd3612cc9b593436265861465ef; ?>
<?php unset($__componentOriginala8824dd3612cc9b593436265861465ef); ?>
<?php endif; ?>


        <div class="flex flex-row justify-center items-end pb-4 w-full">
            <hr class="border-base-content/10 basis-[80px] pb-[.35lh]"><span class="basis-56 shrink-0 font-light text-center">or use secure 1-click connect</span><hr class="border-base-content/10 basis-[80px] pb-[.35lh]">
        </div>
        <div class="flex gap-2 justify-center flex-wrap">
            <div class="tooltip tooltip-primary" data-tip="Sign in with Google">
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '','icon' => 'icon-google'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['no-spinner' => true,'class' => 'btn btn-primary','@click' => '$dispatch(\'notify\', { type: \'info\', variant:\'soft\', title: \'Google OAuth\',  message: \'You would be connected/registered using your Google account.\' })']); ?>
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
            <div class="tooltip tooltip-primary" data-tip="Sign in with Apple">
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '','icon' => 'icon-apple'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['no-spinner' => true,'class' => 'btn btn-primary pb-0.5','@click' => '$dispatch(\'notify\', { type: \'info\', variant:\'soft\', title: \'Apple OAuth\',  message: \'You would be connected/registered using your Apple account.\' })']); ?>
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
            <div class="tooltip tooltip-primary" data-tip="Sign in with Microsoft">
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => '','icon' => 'icon-microsoft'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['no-spinner' => true,'class' => 'btn btn-primary','@click' => '$dispatch(\'notify\', { type: \'info\', variant:\'soft\', title: \'Microsoft OAuth\',  message: \'You would be connected/registered using your Microsoft account.\' })']); ?>
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
        </div>
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
<?php endif; ?><?php /**PATH /var/www/allyouneed.local/storage/framework/views/livewire/views/479e68eb.blade.php ENDPATH**/ ?>
<div class="relative preview grid grid-cols-1 xl:grid-cols-[1fr_auto] items-start justify-center gap-4">
<div class="xl:w-128 grid grid-cols-[1fr_auto] items-start gap-2 justify-self-center">
    <?php if (isset($component)) { $__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Alert::resolve(['color' => 'info','variant' => 'outline','title' => 'New messages!','description' => '8 unread messages','icon' => 'heroicon-o-information-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-span-full justify-self-stretch']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['color' => 'info'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Open <?php echo $__env->renderComponent(); ?>
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
<?php if (isset($__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d)): ?>
<?php $attributes = $__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d; ?>
<?php unset($__attributesOriginal17a6ee89d6567fb67880b8867c7d3e1d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d)): ?>
<?php $component = $__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d; ?>
<?php unset($__componentOriginal17a6ee89d6567fb67880b8867c7d3e1d); ?>
<?php endif; ?>
    <div class="flex flex-col gap-1">
        <div class="flex justify-between items-center gap-2">
            <?php if (isset($component)) { $__componentOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e306c92c24930d8eeb1c9d8d1676c2 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Button::resolve(['label' => 'Welcome'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$dispatch(\'notify\', { type: \'message\', sender:{ name:\'John Hammond\', avatar:\'/people/fake/john-hammond.webp\'}, title: \'Important message from an important person\', message: \'Welcome to Jurassic Park!\' })']); ?>
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
            <?php if (isset($component)) { $__componentOriginal67daebfdbc86ff439882b72bdd6b78e6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67daebfdbc86ff439882b72bdd6b78e6 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Rating::resolve(['color' => 'error','svg' => 'heroicon-s-heart','value' => '5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Rating::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67daebfdbc86ff439882b72bdd6b78e6)): ?>
<?php $attributes = $__attributesOriginal67daebfdbc86ff439882b72bdd6b78e6; ?>
<?php unset($__attributesOriginal67daebfdbc86ff439882b72bdd6b78e6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67daebfdbc86ff439882b72bdd6b78e6)): ?>
<?php $component = $__componentOriginal67daebfdbc86ff439882b72bdd6b78e6; ?>
<?php unset($__componentOriginal67daebfdbc86ff439882b72bdd6b78e6); ?>
<?php endif; ?>
        </div>
        <div class="flex justify-between items-center gap-2">
            <?php if (isset($component)) { $__componentOriginal30a895b5a273443806b56ec1f117a21f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30a895b5a273443806b56ec1f117a21f = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Toggle::resolve(['label' => 'Toggle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Toggle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('labelChecked', null, []); ?> 
                Toggle <span class="text-sm">(checked)</span>
             <?php $__env->endSlot(); ?>
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
            <?php if (isset($component)) { $__componentOriginal9d982f175a42555efb3431339cd5cb9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d982f175a42555efb3431339cd5cb9c = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Badge::resolve(['size' => 'sm','color' => 'success','label' => 'Badge'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

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
        </div>
        <?php if (isset($component)) { $__componentOriginal684733dbde6e02b16e4ef719f7941dd6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal684733dbde6e02b16e4ef719f7941dd6 = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Select::resolve(['title' => 'Favorite components','placeholder' => 'Select as many as your want','rows' => '12','maxRows' => '3','multiple' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('icon', null, ['class' => 'group-hover:text-pink-400 group-focus-within:text-pink-400']); ?> 
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => 'heroicon-o-heart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
             <?php $__env->endSlot(); ?>
            <?php

$__statamicResultiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgsTagContent = <<<'CONTENTiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs'
CiAgICAgICAgICAgIDw/cGhwIGlmKFxMaXZld2lyZVxNZWNoYW5pc21zXEV4dGVuZEJsYWRlXEV4dGVuZEJsYWRlOjppc1JlbmRlcmluZ0xpdmV3aXJlQ29tcG9uZW50KCkpOiA/Pjw/cGhwIFxMaXZld2lyZVxGZWF0dXJlc1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5c1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5czo6b3Blbkxvb3AoKTsgPz48P3BocCBlbmRpZjsgPz5AZm9yZWFjaCAoJGVudHJpZXMtPmdyb3VwQnkoZm4oJGVudHJ5KSA9PiAkZW50cnktPmdyb3VwPy0+dGl0bGUpIGFzICRncm91cCA9PiAkaXRlbXMpPD9waHAgaWYoXExpdmV3aXJlXE1lY2hhbmlzbXNcRXh0ZW5kQmxhZGVcRXh0ZW5kQmxhZGU6OmlzUmVuZGVyaW5nTGl2ZXdpcmVDb21wb25lbnQoKSk6ID8+PD9waHAgXExpdmV3aXJlXEZlYXR1cmVzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzOjpzdGFydExvb3AoJGxvb3AtPmluZGV4KTsgPz48P3BocCBlbmRpZjsgPz4KICAgICAgICAgICAgPG9wdGdyb3VwIGNsYXNzPSJmb250LWJvbGQgc3BhY2UteS0xIiBsYWJlbD0ie3sgJGdyb3VwIH19Ij4KICAgICAgICAgICAgICAgIDw/cGhwIGlmKFxMaXZld2lyZVxNZWNoYW5pc21zXEV4dGVuZEJsYWRlXEV4dGVuZEJsYWRlOjppc1JlbmRlcmluZ0xpdmV3aXJlQ29tcG9uZW50KCkpOiA/Pjw/cGhwIFxMaXZld2lyZVxGZWF0dXJlc1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5c1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5czo6b3Blbkxvb3AoKTsgPz48P3BocCBlbmRpZjsgPz5AZm9yZWFjaCAoJGl0ZW1zIGFzICRlbnRyeSk8P3BocCBpZihcTGl2ZXdpcmVcTWVjaGFuaXNtc1xFeHRlbmRCbGFkZVxFeHRlbmRCbGFkZTo6aXNSZW5kZXJpbmdMaXZld2lyZUNvbXBvbmVudCgpKTogPz48P3BocCBcTGl2ZXdpcmVcRmVhdHVyZXNcU3VwcG9ydENvbXBpbGVkV2lyZUtleXNcU3VwcG9ydENvbXBpbGVkV2lyZUtleXM6OnN0YXJ0TG9vcCgkbG9vcC0+aW5kZXgpOyA/Pjw/cGhwIGVuZGlmOyA/PgogICAgICAgICAgICAgICAgPG9wdGlvbiA6dmFsdWU9IiRlbnRyeS0+aWQiPnt7ICRlbnRyeS0+dGl0bGUgfX08L29wdGlvbj4KICAgICAgICAgICAgICAgIDw/cGhwIGlmKFxMaXZld2lyZVxNZWNoYW5pc21zXEV4dGVuZEJsYWRlXEV4dGVuZEJsYWRlOjppc1JlbmRlcmluZ0xpdmV3aXJlQ29tcG9uZW50KCkpOiA/Pjw/cGhwIFxMaXZld2lyZVxGZWF0dXJlc1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5c1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5czo6ZW5kTG9vcCgpOyA/Pjw/cGhwIGVuZGlmOyA/PkBlbmRmb3JlYWNoPD9waHAgaWYoXExpdmV3aXJlXE1lY2hhbmlzbXNcRXh0ZW5kQmxhZGVcRXh0ZW5kQmxhZGU6OmlzUmVuZGVyaW5nTGl2ZXdpcmVDb21wb25lbnQoKSk6ID8+PD9waHAgXExpdmV3aXJlXEZlYXR1cmVzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzOjpjbG9zZUxvb3AoKTsgPz48P3BocCBlbmRpZjsgPz4KICAgICAgICAgICAgICAgIDwvb3B0Z3JvdXA+CiAgICAgICAgICAgIDw/cGhwIGlmKFxMaXZld2lyZVxNZWNoYW5pc21zXEV4dGVuZEJsYWRlXEV4dGVuZEJsYWRlOjppc1JlbmRlcmluZ0xpdmV3aXJlQ29tcG9uZW50KCkpOiA/Pjw/cGhwIFxMaXZld2lyZVxGZWF0dXJlc1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5c1xTdXBwb3J0Q29tcGlsZWRXaXJlS2V5czo6ZW5kTG9vcCgpOyA/Pjw/cGhwIGVuZGlmOyA/PkBlbmRmb3JlYWNoPD9waHAgaWYoXExpdmV3aXJlXE1lY2hhbmlzbXNcRXh0ZW5kQmxhZGVcRXh0ZW5kQmxhZGU6OmlzUmVuZGVyaW5nTGl2ZXdpcmVDb21wb25lbnQoKSk6ID8+PD9waHAgXExpdmV3aXJlXEZlYXR1cmVzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzXFN1cHBvcnRDb21waWxlZFdpcmVLZXlzOjpjbG9zZUxvb3AoKTsgPz48P3BocCBlbmRpZjsgPz4KICAgICAgICAgICAg
CONTENTiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs;

$__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->setContent(base64_decode($__statamicResultiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgsTagContent));
$__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->setTag(
    app(\Statamic\Tags\Loader::class)->load('collection', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['from'=>'components','as'=>\Statamic\View\Blade\StatamicTagCompiler::adjustDynamicVariableName('entries')]),
        'content' => '',
        'context' => [],
        'tag' => 'collection',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(true)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['from'=>'components','as'=>\Statamic\View\Blade\StatamicTagCompiler::adjustDynamicVariableName('entries')]));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->render();
}
unset($__statamicResultiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgsTagContent);

if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->isArray()) {
    $__currentLoopData = $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getValue();

    if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs = get_defined_vars();
            $__restoreLoopVariablesiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs = $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->hasScope()) {
                ${$__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getScopeName()} = $__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs;
            } else {
                $__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs);
            
                if (is_array($__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs)) {
                    $__restoreLoopVariablesiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs = array_merge($__restoreLoopVariablesiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs, array_keys($__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs));
                    
                    foreach ($__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $entries->groupBy(fn($entry) => $entry->group?->title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <optgroup class="font-bold space-y-1" label="<?php echo e($group); ?>">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <option :value="$entry->id"><?php echo e($entry->title); ?></option>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </optgroup>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <?php
            
            if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->hasScope()) {
                unset(${$__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs as $__key) {
                if (isset($__statamicStachedVarsiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs[$__key])) {
                    $$__key = $__statamicStachedVarsiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs,
                $__restoreLoopVariablesiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs,
                $__statamicLoopValueiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->canRenderAsString()) {
    echo $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->renderString();
}

if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->shouldRenderCompiledContent()):
?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $entries->groupBy(fn($entry) => $entry->group?->title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <optgroup class="font-bold space-y-1" label="<?php echo e($group); ?>">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <option :value="$entry->id"><?php echo e($entry->title); ?></option>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </optgroup>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <?php
endif;

foreach ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostiUVupFwYLQM2i0cXUIFWRyWLbnwsYIgs
);
?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal684733dbde6e02b16e4ef719f7941dd6)): ?>
<?php $attributes = $__attributesOriginal684733dbde6e02b16e4ef719f7941dd6; ?>
<?php unset($__attributesOriginal684733dbde6e02b16e4ef719f7941dd6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal684733dbde6e02b16e4ef719f7941dd6)): ?>
<?php $component = $__componentOriginal684733dbde6e02b16e4ef719f7941dd6; ?>
<?php unset($__componentOriginal684733dbde6e02b16e4ef719f7941dd6); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal96148f61cfb345d4231e89b65b9f59bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96148f61cfb345d4231e89b65b9f59bb = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Input::resolve(['label' => 'Input','placeholder' => 'Type anything here','maxlength' => '25','lengthIndicator' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    </div>
    <?php if (isset($component)) { $__componentOriginale211493480164c456d6f9c96d35447db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale211493480164c456d6f9c96d35447db = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\Menu::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Menu::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'z-1 bg-base-100 w-max rounded-sm border-1 border-base-content/20']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <?php if (isset($component)) { $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\MenuItem::resolve(['icon' => 'heroicon-o-user','label' => 'Profile'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menuItem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\MenuItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $attributes = $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $component = $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
    <hr class="text-base-300"/>
    <?php if (isset($component)) { $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\MenuItem::resolve(['icon' => 'heroicon-o-cog-8-tooth','label' => 'Settings'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menuItem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\MenuItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $attributes = $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $component = $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa = $attributes; } ?>
<?php $component = AllYoullNeed\AdvancedControls\View\Components\MenuItem::resolve(['icon' => 'heroicon-o-document-currency-dollar','label' => 'Billing'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menuItem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\MenuItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $attributes = $__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__attributesOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa)): ?>
<?php $component = $__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa; ?>
<?php unset($__componentOriginal1e2a9d0894ffed8eaf8223277b349ffa); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale211493480164c456d6f9c96d35447db)): ?>
<?php $attributes = $__attributesOriginale211493480164c456d6f9c96d35447db; ?>
<?php unset($__attributesOriginale211493480164c456d6f9c96d35447db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale211493480164c456d6f9c96d35447db)): ?>
<?php $component = $__componentOriginale211493480164c456d6f9c96d35447db; ?>
<?php unset($__componentOriginale211493480164c456d6f9c96d35447db); ?>
<?php endif; ?>

</div>
<?php if (isset($component)) { $__componentOriginal5f511c2fab6216a0f1f73cc0621bdb93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f511c2fab6216a0f1f73cc0621bdb93 = $attributes; } ?>
<?php $component = App\View\Components\CardDemo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-demo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDemo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f511c2fab6216a0f1f73cc0621bdb93)): ?>
<?php $attributes = $__attributesOriginal5f511c2fab6216a0f1f73cc0621bdb93; ?>
<?php unset($__attributesOriginal5f511c2fab6216a0f1f73cc0621bdb93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f511c2fab6216a0f1f73cc0621bdb93)): ?>
<?php $component = $__componentOriginal5f511c2fab6216a0f1f73cc0621bdb93; ?>
<?php unset($__componentOriginal5f511c2fab6216a0f1f73cc0621bdb93); ?>
<?php endif; ?>
<img class="max-xl:hidden absolute -bottom-2 rounded-full size-32 left-1/2 -translate-x-1/2" src="/assets/logo-sm.webp" alt="All you need logo"/>
</div>


<div class="xl:-mt-10 grid grid-cols-1 xl:grid-cols-[auto_1fr] gap-4 xl:gap-10 items-start justify-center">
    <div class="contents xl:block min-h-120 xl:w-128 relative justify-self-center">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('login', ['class' => 'xl:absolute min-h-120']);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1572429706-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
    </div>
    <?php if (isset($component)) { $__componentOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a = $attributes; } ?>
<?php $component = App\View\Components\ScheduleDemo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('schedule-demo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ScheduleDemo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'self-end']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a)): ?>
<?php $attributes = $__attributesOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a; ?>
<?php unset($__attributesOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a)): ?>
<?php $component = $__componentOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a; ?>
<?php unset($__componentOriginal4ce3c3742ccf3adc1a647bd5ca9c5c2a); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/allyouneed.local/storage/framework/views/d66b98f5e4f9ad96945dbd7b68681f82.blade.php ENDPATH**/ ?>